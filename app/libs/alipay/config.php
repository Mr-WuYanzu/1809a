<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016092500594759",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEA5vyOK2HxUiulDNsvgdZiVb9FPjk3fgeV5sAK0iC646gnnBX9LLjJyaFDiivWNk3VsRCSqy11I9+TdlaBvQUJifKfn1nJJPIZzSqrh0sieKdTw6030Clhtj4B1kCqQ8klnwMnBjkAjpaUkyS+v2tF6BfuSv6n2JyyxnQnmxQi0hpV1uWsHO34oLglN/ocJWSZYJnJeNIkhWQEn52mZ+uCalLYW7Tn3uuqc01vnyYHGuysSjfWcwrrcTMzBAj6c376Y3Hqs1qknrNhea/bNerq6c17/G5/DowLmr7hHOl/HEeHxTDUqpHUcEX0ghjumtHPYrJdT0e2NUcWkCYWGR+qkwIDAQABAoIBAQDEfRBfHQjQUmorfoRyGTE7KeK4JKns3n0IdlJ+HvN71z4ii537HhIhH7o5XkLxnNJrteJeFOQxqO1i3AGvDgroOujH//OYJw4FtgeFpkdjhUs/CCmTPLBu+15KqGVuFjyXgHIA3Bp6MOOgK8DLSnCEF19QkkGrhNia8pICXGWmfLxed+Rsk8v/Eu/7IlUasvcQS17jh7aI5n2o+WP1ZT4Wz4fOSviuNXID+/MdMvtzSbAJRB4G9/zyLqACsMMpPfJWF6ODdNg7k9YKdW/zouHypS3Y1E0O5TBs4jjKDgVrKKKC7AAszHgl5ovlSLC9EUgTFTNayMa8ZJfTP5Vy4C+5AoGBAP7h2lPvCWNjNjK1xvg+0HNHNPiHVSyfIyKhSSD6t59xjK0TWQEVsXdMxBiAmLS2KBGWQuYQP/eMvNT3fBaSNopQ+XQIcbS9va4dAXNQ4OdBYG6BZ57y0peky50ApbGnALpl6WNy6oCDkKHTiO3BdekfcJ38vU1at5oQFOtJl6J3AoGBAOf/4Cu9f3ImEf5rgS4sQe8/Fm8vOGskbd0Rlr0BMW169/GSMehelPgTshSGe4nh2o15PPC9NZttM11NvVT7MMp2CzivKRRkeYHB/huD83SlgUAqyjvdbZY+jmBh1ID7YHbCfLMv6JXLmxut96r4a1P1p7mHAiTU3pZZc3JjicPFAoGAbpRsFXgieZUkgXGt5ivSYgElsSF9yYMtSivxPzanDazE3J4FQlw4B0st1HeOSPCyh5bKZWftaKgNkNPiaSR8NxwUbcvwEPs03OJGq9IOESajAK5x11sAFLxxfic2u9F5lmT6kaPcq27pA9xzjrsdPcvfHxv0wSe3eka53K6r89cCgYEAg6FqT2b1KI7xJqlYYho6TsQ8tljUafYBX6zbGeHTaYqbozSPnIgNfbOvFnY3IcRDfIGNUgoIoGcU/ZteERl0VWskcsTvSeK4DidDRdlYCJbe/slIdS7tPpG/tm/LYmM+GCPBHOnRzSv4lXvfSeIpAzoeL+WqEbu1jxixp/VR9QECgYAsy/Z++RUOtSsoEu7prjXdpAGP+7uvq8YGKIQ8AxCApvBRb1u5PaS5TcNNRJYYHN/sDzh+PVhJUFMeR39Stxyqw8HDPn+ZhpKlKD3YAWfQWrgF3U5eL8fmDrmYU4Y2FMM6na9JU4LIHD1p3zexYzjyg8UtjewbB2JuRT5ds3w8SQ==",
		
		//异步通知地址
		'notify_url' => "http://工程公网访问地址/alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxBfUh89W1rykk1PNubbvDqH889aFPsW62ygM+Mm5YLY1wk3k09QzJdsoRmhwCgx/FfYm9rf58IYMjzYj1FR7H1fe71S1hKKdy4qRDVfVY5AmCeoDLdmYMi2Vb8QEyR5DaOc9212gdgw0vMNb4V2KD26isUwf63TOLPZML99+Jjv79stBwfuICzie10sRAzHqzKIrL1hIQFOhEJLnts3WjArFb8iyvFEP4O6WrXBmkS0iwwxyl7TqbT9bTNxCTeCtiXkpQIST1C5319kdh4Mina9Wg79/dGZF1PUe1Lm1NEVH9epA2NP06ooUhxo+hpQvBNsS7Q2AVsUfnMiTIVkkyQIDAQAB",
		
	
);