<?php 
	namespace src;

	use LINE\LINEBot;
	use LINE\LINEBot\HTTPClient\CurlHTTPClient;

	class setting
	{
		public function register () {

			$channelToken = 'QfhtaUuuqVwcwbCVE7je1X2ZavUL6RzQlQwciKeEpcYOtRdNbvEdtAsUl5zs8gY/hXIDU2oi0tv+pFnvKQJfcrfqrAHAjR9KrqHzJzQQiHZr8koDBrD/ArG9DNu5Hc1hyqy0ZvMtigfiQZVQ54VMWwdB04t89/1O/w1cDnyilFU=';
			$channelSecret = 'de7e1fecae9735a61ee1b350abc0ffb3';

			$bot = new LINEBot(new CurlHTTPClient($channelToken), [
			        'channelSecret' => $channelSecret,
			        // 'endpointBase' => $apiEndpointBase, // <= Normally, you can omit this
			]);
			return $bot;
		}
	}

 ?>