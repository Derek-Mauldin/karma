<?php
// grab the test parameters
require_once("karmadatadesign.php");
// grab the class to test
require_once(dirname(__DIR__) . "/public_html/php/classes/message.php");

// grab parent class
require_once(dirname(__DIR__)) ."/public_html/php/classes/member.php";

// grab parent class
require_once(dirname(__DIR__)) ."/public_html/php/classes/profile.php";

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
	 * valid messageSender to use
	 * @var string $VALID_MESSAGESENDER
	 **/
	protected $VALID_MESSSAGESENDER = null;
	/**
	 * valid messageReceiver to use
	 * @var string $VALID_MESSAGERECEIVER
	 **/
	protected $VALID_MESSAGERECEIVER = null;
	/**
	 * valid messageContent to use
	 * @var string $VALID_MESSAGECONTENT
	 **/
	protected $VALID_MESSAGECONTENT = "Its Easy to learn computer languages";

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
	protected $member2 =null;

	/**
	 ** valid salt
	 * @var string $VALID_SALT
	 **/
	protected $salt = null;
	/**
	 ** valid hash
	 * @var string $VALID_HASH
	 **/
	protected $hash = null;

	/**
 * create dependent objects before running each test
 **/
	public final function setUp() {
		// run the default setup() method first
		parent::setUp();

		$this->salt =bin2hex(openssl_random_pseudo_bytes(32));
		$this->hash = hash_pbkdf2("sha512","bootcamp-coders", $this->salt, 4096, 128);


		//create and insert a Message to own the test
		$this->member1 = new Member(null, "w", "blurb1@gail.com", "takeItEasy", $this->hash, $this->salt, "salt1");
		$this->member1->insert($this->getPDO());

		$this->member2 = new Member(null, "v", "blurb2@gail.com", "whatIsEasy", "hash2", "salt2");
		$this->member2->insert($this->getPDO());

		//create and insert a Profile to own the test
		$this->profile1 = new Profile(null, $this->member1->getMemberId(), "itsOk", "whatIsGoingOn", "john", "paul", null);
		$this->profile1->insertProfile($this->getPDO());

		$this->profile2 = new Profile(null, $this->member2->getMemberId(), "knock", "happiest","jake", "Norris", null);
		$this->profile2->insertProfile($this->getPDO());
	}

	/**
	 * test inserting a valid Message and verify that the actual mySQL data matches
	 **/
	public function testInsertValidMessage() {
		// count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("message");

		// create a new Message and insert to into mySQL
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());

		// grab the data from mySQL and enforce the fields match our expectations
		$pdoMessage = Message::getMessageByMessageId($this->getPDO(), $message->getMessageId());
		$this->assertSame($numRows + 1, $this->getConnection()->getRowCount("message"));
		$this->assertSame($pdoMessage->getProfile1(), $this->VALID_PROFILE1);
		$this->assertSame($pdoMessage->getProfile2(), $this->VALID_PROFILE2);
		$this->assertSame($pdoMessage->getMessageContent(), $this->VALID_MESSAGECONTENT);
	}

	/**
	 * test inserting a Message that already exists
	 *
	 * @expectedException PDOException
	 **/
	public function testInsertInvalidMessage() {
		// create a profile with a non null messageId and watch it fail
		$message = new Message(KarmaDataDesign::INVALID_KEY, $this->VALID_PROFILE1, $this->VALID_PROFILE2, $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());
	}

	/**
	 * test inserting a Message, editing it, and then updating it
	 **/
	public function testUpdateValidMessage() {
		// count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("message");

		// create a new Message and insert to into mySQL
		$message = new Message(null, $this->VALID_PROFILE1, $this->VALID_PROFILE2, $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());

		// edit the Message and update it in mySQL
		$message->setProfile1($this->VALID_PROFILE1);
		$message->update($this->getPDO());

		// grab the data from mySQL and enforce the fields match our expectations
		$pdoMessage = Message::getMessageByProfileId($this->getPDO(), $message->getProfileId());
		$this->assertSame($numRows + 1, $this->getConnection()->getRowCount("Message"));
		$this->assertSame($pdoMessage->getProfile1(), $this->VALID_PROFILE1);
		$this->assertSame($pdoMessage->getProfile2(), $this->VALID_PROFILE2);
		$this->assertSame($pdoMessage->getMessageContent(), $this->VALID_MESSAGECONTENT);
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
		$pdoMessage = Message::getMessageByProfileId($this->getPDO(), $this->profile1->getProfileId());
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
	 * test inserting a Message and regrabbing it from mySQL
	 **/
	public function testGetValidMessageByMesageId() {
		// count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("message");

		// create a new Message and insert to into mySQL
		$message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$message->insert($this->getPDO());

		// grab the data from mySQL and enforce the fields match our expectations
		$pdoMessage = Message::getMessageByMessageId($this->getPDO(), $message->getMessageId());
		$this->assertSame($numRows + 1, $this->getConnection()->getRowCount("message"));
		$this->assertSame($pdoMessage->getProfile1(), $this->VALID_PROFILE1);
		$this->assertSame($pdoMessage->getProfile2(), $this->VALID_PROFILE2);
		$this->assertSame($pdoMessage->getMessageContent(), $this->VALID_MESSAGECONTENT);
	}

	/**
	 * test grabbing a Message that does not exist
	 **/
	public function testGetInvalidMessageByMesageId() {
		// grab a Message id that exceeds the maximum allowable message id
		$message = Message::getMessageByMessageId($this->getPDO(), karmaDataDesignTest::INVALID_KEY);
		$this->assertNull($message);
	}

	public function testGetValidMessageByMessagesender() {
		// count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("message");

		// create a new Message and insert to into mySQL
		$Message = new Message(null, $this->profile1->getProfileId(), $this->profile2->getProfileId(), $this->VALID_MESSAGECONTENT);
		$Message->insert($this->getPDO());

		// grab the data from mySQL and enforce the fields match our expectations
		$pdoMessage = Message::getMessageeByMessagesender($this->getPDO(), $this->VALID_MESSAGESENDER);
		$this->assertSame($numRows + 1, $this->getConnection()->getRowCount("message"));
		$this->assertSame($pdoMessage->getProfile1(), $this->VALID_PROFILE1);
		$this->assertSame($pdoMessage->getPROFILE2(), $this->VALID_PROFILE2);
		$this->assertSame($pdoMessage->getMessageContent(), $this->VALID_MESSAGECONTENT);
	}

	/**
	 * test grabbing a Message by sender that does not exist
	 **/
	public function testGetInvalidMessageByProfile1() {
		// grab a message sender that does not exist
		$message = Message::getMessageByProfile1($this->getPDO(), "@doesnotexist");
		$this->assertNull($message);
	}

	/**
	 * test grabbing a Message by message receiver
	 **/
	public function testGetValidMessageByProfile2() {
		// count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("message");

		// create a new Message and insert to into mySQL
		$Message = new Message(null, $this->profile1->getProfileId(), $this->profile2	->getProfileId(), $this->VALID_MESSAGECONTENT);
		$Message->insert($this->getPDO());

		// grab the data from mySQL and enforce the fields match our expectations
		$pdoMessage = Message::getMessageByProfileId($this->getPDO(), $this->profile2->getProfileId());
		$this->assertSame($numRows + 1, $this->getConnection()->getRowCount("message"));
		$this->assertSame($pdoMessage->getProfile1(), $this->profile1->getProfileId());
		$this->assertSame($pdoMessage->getProfile2(), $this->profile2->getProfileId());
		$this->assertSame($pdoMessage->getMessageContent(), $this->VALID_MESSAGECONTENT);
	}

	/**
	 * test grabbing a Message by a message receiver that does not exists
	 **/
	public function testGetInvalidMessageByProfileId() {
		// grab an message receiver that does not exist
		$message = Message::getMessageByProfileId($this->getPDO(), "does@not.exist");
		$this->assertNull($message);
	}
}