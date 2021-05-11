<?php
return array(
    'version' => 2,
    'endpoints' => array(
        '*/*' => array(
            'endpoint' => '{service}.{region}.backblazeb2.com'
        ),
        'cn-north-1/*' => array(
            'endpoint' => '{service}.{region}.backblazeb2.com.cn',
            'signatureVersion' => 'v4'
        ),
        'us-gov-west-1/iam' => array(
            'endpoint' => 'iam.us-gov.backblazeb2.com'
        ),
        'us-gov-west-1/sts' => array(
            'endpoint' => 'sts.us-gov-west-1.backblazeb2.com'
        ),
        'us-gov-west-1/s3' => array(
            'endpoint' => 's3-{region}.backblazeb2.com'
        ),
        '*/cloudfront' => array(
            'endpoint' => 'cloudfront.backblazeb2.com',
            'credentialScope' => array(
                'region' => 'us-east-1'
            )
        ),
        '*/iam' => array(
            'endpoint' => 'iam.backblazeb2.com',
            'credentialScope' => array(
                'region' => 'us-east-1'
            )
        ),
        '*/importexport' => array(
            'endpoint' => 'importexport.backblazeb2.com',
            'credentialScope' => array(
                'region' => 'us-east-1'
            )
        ),
        '*/route53' => array(
            'endpoint' => 'route53.backblazeb2.com',
            'credentialScope' => array(
                'region' => 'us-east-1'
            )
        ),
        '*/sts' => array(
            'endpoint' => 'sts.backblazeb2.com',
            'credentialScope' => array(
                'region' => 'us-east-1'
            )
        ),
        'us-east-1/sdb' => array(
            'endpoint' => 'sdb.backblazeb2.com'
        ),
        'us-east-1/s3' => array(
            'endpoint' => 's3.backblazeb2.com'
        ),
        'us-east-2/s3' => array(
            'endpoint' => 's3.{region}.backblazeb2.com'
        ),
        'us-west-1/s3' => array(
            'endpoint' => 's3.{region}.backblazeb2.com'
        ),
        'eu-central-1/s3' => array(
            'endpoint' => 's3.{region}.backblazeb2.com'
        )
    )
);
