<?php
return array (	
		//应用ID,您的APPID。
		'app_id' => "2016101500691509",

		//商户私钥
		'merchant_private_key' => "MIIEogIBAAKCAQEAiL922GS2gqKDa3/e1sbwI4MB9VtB/qHt8MvFp2pkhW2rLdseolld3wGCvyCkxTpO94q2AgM8hZDgkEnQHuAtIbDxM7WUL2MXFF02gc7FcSzv9uPLbp+9NPCrtO3iePzdBs75G7Tcb2j3f8yIvuWPv4sh7/RKDgC7azdFipjj5x6bOIS4/ir3ZOZpkmDM/NnaFQQiVOdHRk0Jz3bZQgv2Y5v/7NWADQ6xzMft5bp4NP4FpKNiswBqMOuFyqhCcsMBaGjI5vPLgue3vNjEmvMINMXc0Yf9Ui82w20xAjJ4Ad0bgknT2kUI295smt+X/S6H0gvu7juLDH5G/dNeLwO6AQIDAQABAoIBABq5kHhp9mFBcX2o19wRtQy7pb5Vv2gMLXxJ1q8JU+vfqvyjPjFsVbQnj23a61jANH6cVUW/bCyOS9TnGA1wsmFLO1hnvDYmn3QTY3uq9VtQ9PTDQBa2kTuvbV9GvmP2xxt1h6mqhwoe8X/AcVkddCJzBobmrzJdYkNp4eVcS+32+kzcALGWiZN/PNEQ/+5AyT5gumMsY7v9onDtaFGL5mBBYfwCLlI/VKvGuDuwMZ5N7/qI2VoiCMBjZFL8rSm3J9rM9iVB2GLa+lw6AcRM7rWLZnpMZn66oW3U/a1EiG8WiHY660TlTM7QbSlMks0XRdWu5N82y2L/XOwIg8t5rYECgYEA6or+AADiE16tMCSc8O3r3eA4wKlFqWZY041djfAys7Hc5idg4kssgHA5YEutkb2sOjXiy3UX0ACf7cIVkH/OuQJlFkjL/tQuv/a8GoBcF117v4wzyPh0q5w1R+jIpoLzck2GKQG/TbbzZUYdy1Os21iAyyYWSiZ/PeNlxcOFUrUCgYEAlUIbeoRBeNnBSwL+18GGD2kzx+2xydb44WFIR6m1mrdZCic7KmGCwQyy7iId50us+NW2Hp4ZyzrEEHh7qqAzF5cB6390cFODIx9oqDgJh2rVyV6JHZUHc8xtPz2BsHvlMViDrWhryw1O4v/Qv4ReRv/D2mzt4EhwkPNNx1nLnZ0CgYBwQXwWdlW+HZdYrn1rFwTIGhQvqhTMYk7rWgLH94nc1ak7gudtB7vR8WSUwUPeuGBhL/9Pj8iI5nOlMTpvAazogcvuIYN5gQarHCWlrX/mMvkSkcELVFdK96XMuA6pG433TEGFCPAN+x19gFSsR205Qp/KG32ZmdlWvqqsP8tk7QKBgAM3PWhSWSbFaki3c84qOT0zww3XrTDwFMSmV+xTV7pRoPV7CudK2opWP7Spv4MwOjXSRO478cpTJc5FCkUO1or3ke8E+/k/k1+6WYLmUi48uwZvpvygLVztVp06MgUfZjy973hY+5mQW9bANDssGuvkrs+R8T4X0XUOCOr2oFBxAoGASj2EOc2GQb14XLUQgmH74O0ZriQeiiOCGz8c5KcvKON6luGxORTs37IQhO6iXjIIvKGks9jpa8yFvPYeFpxLvFc77SImyRBskcKukHQaMrTPIJGzVkxbVwvN047jVp52ySuZeKok8vmmnT7yC5N/Ptt9quyNdSZZl+t+WyieAXU=",
		
		//异步通知地址
		'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://education.com/index.php/order/returnUrl",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAiL922GS2gqKDa3/e1sbwI4MB9VtB/qHt8MvFp2pkhW2rLdseolld3wGCvyCkxTpO94q2AgM8hZDgkEnQHuAtIbDxM7WUL2MXFF02gc7FcSzv9uPLbp+9NPCrtO3iePzdBs75G7Tcb2j3f8yIvuWPv4sh7/RKDgC7azdFipjj5x6bOIS4/ir3ZOZpkmDM/NnaFQQiVOdHRk0Jz3bZQgv2Y5v/7NWADQ6xzMft5bp4NP4FpKNiswBqMOuFyqhCcsMBaGjI5vPLgue3vNjEmvMINMXc0Yf9Ui82w20xAjJ4Ad0bgknT2kUI295smt+X/S6H0gvu7juLDH5G/dNeLwO6AQIDAQAB",
);