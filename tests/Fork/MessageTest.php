<?php

use PHPUnit\Framework\TestCase;

use Dmkit\Fork\Worker\Message\Message;

class MessageTest extends TestCase
{
	public function testCrud()
	{
		// also want to make sure that two or more messages will work
		
		$data = ['error'=>1, 'msg'=>'error'];
		$data2 = ['error'=>2, 'msg'=>'error2'];

		$msg = new Message;
		$msg->set($data);

		$msg2 = new Message;
		$msg2->set($data2);

		$this->assertEquals($data, $msg->get());
		$this->assertEquals($data2, $msg2->get());

		$this->assertTrue( $msg->remove() );
		$this->assertTrue( $msg2->remove() );
	}
}