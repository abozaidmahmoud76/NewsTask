<?php
return [
   'adapters' => [ app(\App\ThirdParty\News\adapters\NewsApiAdapter::class),
                  app(\App\ThirdParty\News\adapters\NewsSourceTwoAdapter::class)
       ]
];
