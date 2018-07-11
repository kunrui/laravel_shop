<?php

return [
    'alipay' => [
        'app_id'         => '2016091300504907',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2tJtOzXhS12bTadTvU2GHhcWaRPAQZHJjeFOpdLfhuov9i8RIT1aEJYEfFG4fM1S5DV+feje4+8ELH0seyc52OyzePnaNYcijgx/lNQlQZN5tLyFolZsrIQXY+MDQtweBVcUFCVx5V31p0eXSOpBB9CrYV50zp2oCuZklED3rRsleYI54YlhxApi5pWfEsm7RQQjHdaWq3nP+lllVoEoPgVoN0axBwLgn55IoY44FRRFnOe6+UDsUJVomxyhyggcWOdSrzgan+7t4jqODm6baWUf220MYMoWFTn2D+x0SgaSCDFNVd9H10xl6zCwh1U1f6CB6QpfkT7BWxifb1uLfQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAyHU73/4G+wR02mDRb+PSjnrC2bQWC4A7qowYXnIjceV1+MrCz5P+cwjkHw+Ug2GZ+KfDH1kwf9nZb28KUfAl44AmQx9HsSFpeawH3MeSCFMHr2A1gH/9CFw70/wlr0Hd8acupO1jn35Ys4QvYnwjuRwrHMo6UbtQiJUUdc/X0kMVoP3K22VPvXLNKIORI/sbEfPrFXxNiBlVlu27osy1slYbTMhGKA4/uePtDIfvwVXoNRdNIKjx9qAk0ne30lq7swyLFt56In8JGWExuWvMO/twLR/ZmEdO5q/SoeqLvV0PQLKx2T6wT20XPT87rHzj7IXBs6pme/ZE+Z8YxLZ1nwIDAQABAoIBAFFkWIVgbZEqhA/PU/qsdGfprIgcuP6+eHuNGq/uhDnQw4/bNDJ4ks4+g/Ggr9qQnKX76BwoaKrg14qJeZU/fwLam66RWtivClae5Spd1guPOwWYeODOFv14BcrTDLIWenmOOkA5K0QtVvK870h7wz18FH1CF1/sQIzUi1Qyqhzy7A0HkHcBK5JTg+k+p/y/9a323RTsMGOjOBLvZkcYRH+VslsCZ4TYwypY+RwS2JCJYAarZQ2VsOmogtyDqZ05HDWoYYzIzD3fnEIGIvta43MD/cUDI5hwRVTgs7FVbxgSQ0FFiRbFi/FSjWsLNF9SBj0Xwpz7H/U9vLfQm4cnrLECgYEA7BWVRs8OohByq67Wj/helFYNcJasMFO2OZCfPT4xVPGkB6z341gwpYQaXBLXeoK6XEJe5nWtJPW5/44mx0TBcPOwyK3SElydyfedtEzG4GuySa83QbDsfyZHbe5kvz36Y9Puh8u6Tr4C4bVsW+AubfUmUBpULjcrzoiJI3FWRF0CgYEA2V5F2T3Kip+s5HSDh1LTKpIkcX4glgoA1G2FEYX3JELDGvybAbXeVVsEZBOHvPYW2ymU537WfOjzG+L9oBk0Jem9jJoDXxutKQcSnjc7lrs47DiEZnVuRCrKUvELTqXQz5oqyqw6pKcTSnfxqk2ovkg0LH9w6sg6ceyoQMptQisCgYEA24cyWTa+56qdxtF8iUGuSQc/1hr1oLam8x5tRJipbNCJ8+0+ULQ4ACE4FbgbkLsxKgs5jdmNGJo6y81Wd+OScULZd7JSbmqa+yx7BCaEpDjg/62jlz06nP1uXGXaXw7135A59SJXa1M7AMEgMsriwbK9Xq0s7BC3doT16PRCAK0CgYEAg/j205TumgekQvhyuwCQcPJV6go34qCkLFVqS19Y080tA/+GZR10pcIjAlfRO+r1qY6vd3XM5/3PTIkej8t9m980VF9V2LLHCXff1+uU5Ek7oEAYMtTtY7nPKVhsEw4dn03s2SyEVl+SGM6GDW4lG5JfCv09I275/R1AckX03A0CgYBO15Jz0nkq43GhifIbiXHH3jlGElZk8jFsf1S1YOOfZQZizrDc2qql72gaTcYyRsoOeWMVY++1t3wtWyRbE5sndoWvomLeWLM0h4NoWJIWgPvbNCgQR1QdObVWLiWlT32tLuOGQnFrGfymYykyQjGYBuePzGLOWyYTL8KK+m4zFg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wx2e8f17e263435229',
        'mch_id'      => '1412262202',
        'key'         => 'adlsk5987kdjjfkdjdkdjdkdkdjrtqif',
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];