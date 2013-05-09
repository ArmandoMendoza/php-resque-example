<?php
class MyJob
{
    public function perform()
    {
			// sendSms::send($this->args['msg']);
			sleep(10);
			$file = 'text.txt';
			file_put_contents($file, $this->args['msg']);
    }
}