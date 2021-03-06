<?php
// grab the test parameters
require_once("karmadatadesign.php");

// grab the classes
require_once(dirname(__DIR__) . "/public_html/php/classes/autoload.php");


/**
 * Full PHPUnit test for the Message class
 *
 * This is a complete PHPUnit test of the Message class. It is complete because *ALL* mySQL/PDO enabled methods
 * are tested for both invalid and valid inputs.
 *
 * @see Message
 * @author Gerald Fongwe <gfongwe@cnm.edu>
 **/
class MessageTest extends KarmaDataDesign {
	/**
	 * valid messagecontent to use
	 * @var string $VALID_MESSAGECONTENT
	 **/
	protected $VALID_MESSAGECONTENT = "Its Easy to learn computer languages";


	protected $OTHER_VALID_MESSAGE_CONTENT = "No it is not";

	/**
	 * Profile that created the message sent; this is for foreign key relations
	 * @var Profile $profile
	 **/
	protected $profile1 = null;

	/**
	 * Profile that created the message received; this is for foreign key relations
	 * @var Profile $profile
	 **/
	protected $profile2 = null;

	/**
	 * Message that created the message sender id; this is for foreign key relations
	 * @var Profile $profile
	 **/
	protected $member1 = null;

	/**
	 * Message that created the message receiver id; this is for foreign key relations
	 * @var Profile $profile
	 **/
	protected $member2 = null;

	/**
	 ** valid salt
	 * @var string $VALID_SALT
	 **/
	protected $salt = null;
	protected $salt2 = null;
	/**
	 ** valid hash
	 * @var string $VALID_HASH
	 **/
	protected $hash = null;
	protected $hash2 = null;
	/**
	 * email activation string to use for this test
	 * $var string $VALID_EMAIL_ACTIVATION
	 */
	protected $VALID_EMAIL_ACTIVATION = "23456789abcedf01";
	protected $VALID_EMAIL_ACTIVATION2 = "33456789abcedf01";


	/**
	 * create dependent objects before running each test
	 **/
	public final function setUp() {
		// run the default setup() method first
		parent::setUp();

		$this->salt = bin2hex(openssl_random_pseudo_bytes(32));
		$this->hash = hash_pbkdf2("sha512", "dmauldin", $this->salt, 4096, 128);

		$this->salt2 = bin2hex(openssl_random_pseudo_bytes(32));
		$this->hash2 = hash_pbkdf2("sha512", "whoever", $this->salt, 4096, 128);


		//create and insert a Message to own the test
		$this->member1 = new Member(null, "s", "anybody@mymail.com", $this->VALID_EMAIL_ACTIVATION, $this->hash, $this->salt);
		$this->member1->insert($this->getPDO());

		$this->member2 = new Member(null, "s", "nobody@mymail.com", $this->VALID_EMAIL_ACTIVATION2, $this->hash2, $this->salt2);
		$this->member2->insert($this->getPDO());

		//create and insert a Profile to own the test
		$this->profile1 = new Profile(null, $this->member1->getMemberId(), "itsOk", "whatIsGoingOn", "john", "paul", null);
		$this->profile1->insertProfile($this->getPDO());

		$this->profile2 = new Profile(null, $this->member2->getMemberId(), "knock", "happiest", "jake", "Norris", null);
		$this->profile2->insertProfile($this->getPDO());
	}

	/**
	 * test inserting a valid Message and verify that the actual mySQL data matches
	 **/
	public function testInsertValidMessage() {

		// count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("message");

		// create a new Message and insert to into mySQL
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT, null);
		$message->insert($this->getPDO());

		// grab the data from mySQL and enforce the fields match our expectations
		$pdoMessage = Message::getByMessageId($this->getPDO(), $message->getMessageId());
		$this->assertSame($numRows + 1, $this->getConnection()->getRowCount("message"));
		$this->assertSame($pdoMessage->getMessageSenderId(), $message->getMessageSenderId());
		$this->assertSame($pdoMessage->getMessageReceiverId(), $message->getMessageReceiverId());
		$this->assertSame($pdoMessage->getMessageContent(), $message->getMessageContent());
		$this->assertSame($pdoMessage->getMessageDate()->format('Y-m-d'), $message->getMessageDate()->format('Y-m-d'));

	}

	/**
	 * test inserting a Message that already exists
	 *
	 * @expectedException PDOException
	 **/
	public function testInsertInvalidMessage() {

		// create a message
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());

		// insert again and watch it fail
		$message->insert($this->getPDO());

	}

	/**
	 * test inserting a Message, editing it, and then updating it
	 **/
	public function testUpdateValidMessage() {

		// count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("message");

		// create a new Message and insert to into mySQL
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());

		// edit the Message and update it in mySQL
		$message->setMessageContent($this->OTHER_VALID_MESSAGE_CONTENT);
		$message->update($this->getPDO());

		// grab the data from mySQL and enforce the fields match our expectations

		$pdoMessage = Message::getByMessageId($this->getPDO(), $message->getMessageId());
		$this->assertSame($numRows + 1, $this->getConnection()->getRowCount("message"));
		$this->assertSame($pdoMessage->getMessageSenderId(), $message->getMessageSenderId());
		$this->assertSame($pdoMessage->getMessageReceiverId(), $message->getMessageReceiverId());
		$this->assertSame($pdoMessage->getMessageContent(), $message->getMessageContent());
		$this->assertSame($pdoMessage->getMessageDate()->format('Y-m-d'), $message->getMessageDate()->format('Y-m-d'));

	}

	/**
	 * test updating a Message that does not exist
	 *
	 * @expectedException PDOException
	 **/
	public function testUpdateInvalidMessage() {

		// create a Message and try to update it without actually inserting it
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->update($this->getPDO());

	}

	/**
	 * test creating a Message and then deleting it
	 **/
	public function testDeleteValidMessage() {

		// count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("message");

		// create a new Message and insert to into mySQL
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());

		// delete the Message from mySQL
		$this->assertSame($numRows + 1, $this->getConnection()->getRowCount("message"));
		$message->delete($this->getPDO());

		// grab the data from mySQL and enforce the Message does not exist

		$pdoMessage = Message::getByMessageId($this->getPDO(), $message->getMessageId());
		$this->assertNull($pdoMessage);
		$this->assertSame($numRows, $this->getConnection()->getRowCount("message"));

	}

	/**
	 * test deleting a Message that does not exist
	 *
	 * @expectedException PDOException
	 **/
	public function testDeleteInvalidMessage() {
		// create a Message and try to delete it without actually inserting it
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->delete($this->getPDO());
	}


	/**
	 * test grabbing a Message that does not exist
	 **/
	public function testGetInvalidMessageByMesageId() {

		// grab a Message id that exceeds the maximum allowable message id
		$message = Message::getByMessageId($this->getPDO(), KarmaDataDesign::INVALID_KEY);
		$this->assertNull($message);

	}

	public function testGetValidMessageByMessageSender() {

		// count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("message");

		// create a new Message and insert to into mySQL
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());

		// grab the data from mySQL and enforce the fields match our expectations
		$pdoMessages = Message::getMessagesBySenderId($this->getPDO(), $message->getMessageSenderId());

		foreach($pdoMessages as $pdoMessage) {
			if($pdoMessage->getMessageId() === $message->getMessageId()) {
				$this->assertSame($numRows + 1, $this->getConnection()->getRowCount("message"));
				$this->assertSame($pdoMessage->getMessageSenderId(), $message->getMessageSenderId());
				$this->assertSame($pdoMessage->getMessageReceiverId(), $message->getMessageReceiverId());
				$this->assertSame($pdoMessage->getMessageContent(), $message->getMessageContent());
				$this->assertEquals($pdoMessage->getMessageDate(), $message->getMessageDate());
			}
		}

	}

	/**
	 * test grabbing a Message by sender that does not exist
	 **/
	public function testGetInvalidMessageBySender() {

		// create a new Message and insert to into mySQL
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());

		// grab by a message sender that does not exist
		$pdoMessages = Message::getMessagesBySenderId($this->getPDO(), KarmaDataDesign::INVALID_KEY);
		$this->assertTrue($pdoMessages->count() === 0);



	}

	/**
	 * test grabbing a Message by message receiver
	 **/
	public function testGetValidMessagesByReceiver() {

		// count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("message");

		// create a new Message and insert to into mySQL
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());

		$pdoMessages = Message::getMessagesByReceiverId($this->getPDO(), $this->profile2->getProfileId());
		$this->assertTrue($pdoMessages->count() > 0);

		foreach($pdoMessages as $pdoMessage) {
			if($pdoMessage->getMessageId() === $message->getMessageId()) {
					$this->assertSame($numRows + 1, $this->getConnection()->getRowCount("message"));
					$this->assertSame($pdoMessage->getMessageSenderId(), $message->getMessageSenderId());
					$this->assertSame($pdoMessage->getMessageReceiverId(), $message->getMessageReceiverId());
					$this->assertSame($pdoMessage->getMessageContent(), $message->getMessageContent());
					$this->assertEquals($pdoMessage->getMessageDate(), $message->getMessageDate());
			}
		}
	}

	/**
	 * test grabbing a Message by a message receiver that does not exists
	 **/
	public function testGetInvalidMessagesByReceiverId() {

		// create a new Message and insert to into mySQL
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());

		// grab an message receiver that does not exist
		$pdoMessages = Message::getMessagesByReceiverId($this->getPDO(), KarmaDataDesign::INVALID_KEY);
		$this->assertTrue($pdoMessages->count() === 0);

	}

}