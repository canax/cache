<?php
/**
 * Configuration file for DI container.
 */
return [

    // Services to add to the container.
    "services" => [
        "cache" => [
            "shared" => true,
            "callback" => function () {
                $cache = new \Anax\Cache\FileCache();
                $cache->setDI($this);

                // Load the configuration files
                $cfg = $this->get("configuration");
                $config = $cfg->load("cache.php");
                $file = $config["file"] ?? null;

                var_dump($file);
                exit;
                // $cachePath = 
                // $cache
                return $cache;
            }
        ],
    ],
];
