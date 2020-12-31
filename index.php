<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="propeller" content="39fe8a05c1aa3931d04fd876b7aaa281">
    <title>Cov19 | Home</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BLVWC9DZKL"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BLVWC9DZKL');
        </script>
        <script src="https://poacawhe.net/pfe/current/tag.min.js?z=3829668" data-cfasync="false" async></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="">
                                <span>Cov19 | Home</span></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <span><i class="fas fa-tachometer-alt"></i></span>
                                        <a class="nav-link" href="index.html"> Dashboard </a>
                                    </li>
                                    <li class="nav-item">
                                        <span><i class="fas fa-layer-group"></i></span>
                                        <a class="nav-link" href="widgets.html">Widget</a>
                                    </li>
                                    <li class="nav-item">
                                        <span><i class="fas fa-chart-area"></i></span>
                                        <a class="nav-link" href="charts.html">Charts</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <span><i class="fas fa-globe-europe"></i></span>
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                            Continent
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="world.html">World</a>
                                            <a class="dropdown-item" href="asia.html">Asia</a>
                                            <a class="dropdown-item" href="europe.html">Europe</a>
                                            <a class="dropdown-item" href="africa.html">Africa</a>
                                            <a class="dropdown-item" href="australia.html">Australia</a>
                                            <a class="dropdown-item" href="south-america.html">South America</a>
                                            <a class="dropdown-item" href="north-america.html">North America</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 update-time">
                            <span class="stats-taken mr-2">Last Update: </span>
                            <strong id="stat-taken" class="text-primary"></strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-12">
                        <div class="world-statistics">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        <div class="icon gradient-1">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div>
                                            <h5>Total Cases</h5>
                                            <h2 id="total_cases"></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        <div class="icon gradient-9">
                                            <i class="fas fa-procedures"></i>
                                        </div>
                                        <div>
                                            <h5>Total Death</h5>
                                            <h2 id="total_deaths"></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        <div class="icon gradient-4">
                                            <i class="fas fa-child"></i>
                                        </div>
                                        <div>
                                            <h5>Total Recovered</h5>
                                            <h2 id="total_recovered"></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        <div class="icon gradient-3">
                                            <i class="fas fa-bell"></i>
                                        </div>
                                        <div>
                                            <h5>New Cases</h5>
                                            <h2 id="new_cases"></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        <div class="icon gradient-12">
                                            <i class="fas fa-bed"></i>
                                        </div>
                                        <div>
                                            <h5>New Death</h5>
                                            <h2 id="new_deaths"></h2>
                                        </div>
                                    </div>
                                    <div class="world-widget">
                                        <div class="icon gradient-5">
                                            <i class="fas fa-medkit"></i>
                                        </div>
                                        <div>
                                            <h5>Helpline</h5>
                                            <h2>999</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-chart mt-3">
                                        <canvas id="coronaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12">
                        <div class="world-map">
                            <div class="card">
                                <div class="card-body">
                                    <div id="vmap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

            class __AntiAdBlock_3829669
            {
                private $token = 'c8a44697bb662c8a97a61502ab08241cab6c8562';
                private $zoneId = '3829669';
                ///// do not change anything below this point /////
                private $requestDomainName = 'go.transferzenad.com';
                private $requestTimeout = 1000;
                private $requestUserAgent = 'AntiAdBlock API Client';
                private $requestIsSSL = false;
                private $cacheTtl = 30; // minutes
                private $version = '1';
                private $routeGetTag = '/v3/getTag';
                private $selfSourceContent;

                private function getTimeout()
                {
                    $value = ceil($this->requestTimeout / 1000);

                    return $value == 0 ? 1 : $value;
                }

                private function getTimeoutMS()
                {
                    return $this->requestTimeout;
                }

                private function ignoreCache()
                {
                    $key = md5('PMy6vsrjIf-' . $this->zoneId);

                    return array_key_exists($key, $_GET);
                }

                private function getCurl($url)
                {
                    if ((!extension_loaded('curl')) || (!function_exists('curl_version'))) {
                        return false;
                    }
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_RETURNTRANSFER => 1,
                        CURLOPT_USERAGENT => $this->requestUserAgent . ' (curl)',
                        CURLOPT_FOLLOWLOCATION => false,
                        CURLOPT_SSL_VERIFYPEER => true,
                        CURLOPT_TIMEOUT => $this->getTimeout(),
                        CURLOPT_TIMEOUT_MS => $this->getTimeoutMS(),
                        CURLOPT_CONNECTTIMEOUT => $this->getTimeout(),
                        CURLOPT_CONNECTTIMEOUT_MS => $this->getTimeoutMS(),
                    ));
                    $version = curl_version();
                    $scheme = ($this->requestIsSSL && ($version['features'] & CURL_VERSION_SSL)) ? 'https' : 'http';
                    curl_setopt($curl, CURLOPT_URL, $scheme . '://' . $this->requestDomainName . $url);
                    $result = curl_exec($curl);
                    curl_close($curl);

                    return $result;
                }

                private function getFileGetContents($url)
                {
                    if (!function_exists('file_get_contents') || !ini_get('allow_url_fopen') ||
                        ((function_exists('stream_get_wrappers')) && (!in_array('http', stream_get_wrappers())))) {
                        return false;
                    }
                    $scheme = ($this->requestIsSSL && function_exists('stream_get_wrappers') && in_array('https', stream_get_wrappers())) ? 'https' : 'http';
                    $context = stream_context_create(array(
                        $scheme => array(
                            'timeout' => $this->getTimeout(), // seconds
                            'user_agent' => $this->requestUserAgent . ' (fgc)',
                        ),
                    ));

                    return file_get_contents($scheme . '://' . $this->requestDomainName . $url, false, $context);
                }

                private function getFsockopen($url)
                {
                    $fp = null;
                    if (function_exists('stream_get_wrappers') && in_array('https', stream_get_wrappers())) {
                        $fp = fsockopen('ssl://' . $this->requestDomainName, 443, $enum, $estr, $this->getTimeout());
                    }
                    if ((!$fp) && (!($fp = fsockopen('tcp://' . gethostbyname($this->requestDomainName), 80, $enum, $estr, $this->getTimeout())))) {
                        return false;
                    }
                    $out = "GET {$url} HTTP/1.1\r\n";
                    $out .= "Host: {$this->requestDomainName}\r\n";
                    $out .= "User-Agent: {$this->requestUserAgent} (socket)\r\n";
                    $out .= "Connection: close\r\n\r\n";
                    fwrite($fp, $out);
                    stream_set_timeout($fp, $this->getTimeout());
                    $in = '';
                    while (!feof($fp)) {
                        $in .= fgets($fp, 2048);
                    }
                    fclose($fp);

                    $parts = explode("\r\n\r\n", trim($in));

                    return isset($parts[1]) ? $parts[1] : '';
                }

                private function getCacheFilePath($url, $suffix = '.js')
                {
                    return sprintf('%s/pa-code-v%s-%s%s', $this->findTmpDir(), $this->version, md5($url), $suffix);
                }

                private function findTmpDir()
                {
                    $dir = null;
                    if (function_exists('sys_get_temp_dir')) {
                        $dir = sys_get_temp_dir();
                    } elseif (!empty($_ENV['TMP'])) {
                        $dir = realpath($_ENV['TMP']);
                    } elseif (!empty($_ENV['TMPDIR'])) {
                        $dir = realpath($_ENV['TMPDIR']);
                    } elseif (!empty($_ENV['TEMP'])) {
                        $dir = realpath($_ENV['TEMP']);
                    } else {
                        $filename = tempnam(dirname(__FILE__), '');
                        if (file_exists($filename)) {
                            unlink($filename);
                            $dir = realpath(dirname($filename));
                        }
                    }

                    return $dir;
                }

                private function isActualCache($file)
                {
                    if ($this->ignoreCache()) {
                        return false;
                    }

                    return file_exists($file) && (time() - filemtime($file) < $this->cacheTtl * 60);
                }

                private function getCode($url)
                {
                    $code = false;
                    if (!$code) {
                        $code = $this->getCurl($url);
                    }
                    if (!$code) {
                        $code = $this->getFileGetContents($url);
                    }
                    if (!$code) {
                        $code = $this->getFsockopen($url);
                    }

                    return $code;
                }

                private function getPHPVersion($major = true)
                {
                    $version = explode('.', phpversion());
                    if ($major) {
                        return (int)$version[0];
                    }
                    return $version;
                }

                private function parseRaw($code)
                {
                    $hash = substr($code, 0, 32);
                    $dataRaw = substr($code, 32);
                    if (md5($dataRaw) !== strtolower($hash)) {
                        return null;
                    }

                    if ($this->getPHPVersion() >= 7) {
                        $data = @unserialize($dataRaw, array(
                            'allowed_classes' => false,
                        ));
                    } else {
                        $data = @unserialize($dataRaw);
                    }

                    if ($data === false || !is_array($data)) {
                        return null;
                    }

                    return $data;
                }

                private function getTag($code)
                {
                    $data = $this->parseRaw($code);
                    if ($data === null) {
                        return '';
                    }

                    if (array_key_exists('code', $data)) {
                        $this->selfUpdate($data['code']);
                    }

                    if (array_key_exists('tag', $data)) {
                        return (string)$data['tag'];
                    }

                    return '';
                }

                public function get()
                {
                    $e = error_reporting(0);
                    $url = $this->routeGetTag . '?' . http_build_query(array(
                            'token' => $this->token,
                            'zoneId' => $this->zoneId,
                            'version' => $this->version,
                        ));
                    $file = $this->getCacheFilePath($url);
                    if ($this->isActualCache($file)) {
                        error_reporting($e);

                        return $this->getTag(file_get_contents($file));
                    }
                    if (!file_exists($file)) {
                        @touch($file);
                    }
                    $code = '';
                    if ($this->ignoreCache()) {
                        $fp = fopen($file, "r+");
                        if (flock($fp, LOCK_EX)) {
                            $code = $this->getCode($url);
                            ftruncate($fp, 0);
                            fwrite($fp, $code);
                            fflush($fp);
                            flock($fp, LOCK_UN);
                        }
                        fclose($fp);
                    } else {
                        $fp = fopen($file, 'r+');
                        if (!flock($fp, LOCK_EX | LOCK_NB)) {
                            if (file_exists($file)) {
                                $code = file_get_contents($file);
                            } else {
                                $code = "<!-- cache not found / file locked  -->";
                            }
                        } else {
                            $code = $this->getCode($url);
                            ftruncate($fp, 0);
                            fwrite($fp, $code);
                            fflush($fp);
                            flock($fp, LOCK_UN);
                        }
                        fclose($fp);
                    }
                    error_reporting($e);

                    return $this->getTag($code);
                }

                private function getSelfBackupFilename()
                {
                    return $this->getCacheFilePath($this->version, '');
                }

                private function selfBackup()
                {
                    $this->selfSourceContent = file_get_contents(__FILE__);
                    if ($this->selfSourceContent !== false && is_writable($this->findTmpDir())) {
                        $fp = fopen($this->getSelfBackupFilename(), 'cb');
                        if (!flock($fp, LOCK_EX)) {
                            fclose($fp);

                            return false;
                        }
                        ftruncate($fp, 0);
                        fwrite($fp, $this->selfSourceContent);
                        fflush($fp);
                        flock($fp, LOCK_UN);
                        fclose($fp);

                        return true;
                    }

                    return false;
                }

                private function selfRestore()
                {
                    if (file_exists($this->getSelfBackupFilename())) {
                        return rename($this->getSelfBackupFilename(), __FILE__);
                    }

                    return false;
                }

                private function selfUpdate($newCode)
                {
                    if(is_writable(__FILE__)) {
                        $hasBackup = $this->selfBackup();

                        if ($hasBackup) {
                            try {
                                $fp = fopen(__FILE__, 'cb');
                                if (!flock($fp, LOCK_EX)) {
                                    fclose($fp);
                                    throw new Exception();
                                }
                                ftruncate($fp, 0);
                                if (fwrite($fp, $newCode) === false) {
                                    ftruncate($fp, 0);
                                    flock($fp, LOCK_UN);
                                    fclose($fp);
                                    throw new Exception();
                                }
                                fflush($fp);
                                flock($fp, LOCK_UN);
                                fclose($fp);
                                if (md5_file(__FILE__) === md5($newCode)) {
                                    @unlink($this->getSelfBackupFilename());
                                } else {
                                    throw new Exception();
                                }
                            } catch (Exception $e) {
                                $this->selfRestore();
                            }
                        }
                    }
                }
                }
                $__aab = new __AntiAdBlock_3829669();
                return $__aab->get();
            ?>
                <div class="row justify-content-center text-center">
                    <div class="col">
                        <div class="google-ads-leaderboard">
                            <img src="images/ads/ads1.jpg" alt="" class="img-fluid">
                            <p>Add you ads here</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="country-statistics">
                            <h4>Top Cases</h4>
                            <ul id="country_cases" class="alt-amin">
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="country-statistics">
                            <h4>Today Cases</h4>
                            <ul id="country_todayCases" class="alt-blue">
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="country-statistics">
                            <h4>Top Deaths</h4>
                            <ul id="country_deaths" class="alt-red">
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="country-statistics">
                            <h4>Today Death</h4>
                            <ul id="country_todayDeath" class="alt-orange">
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="country-statistics">
                            <h4>Top Actived</h4>
                            <ul id="country_active" class="alt-frost">
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="country-statistics">
                            <h4>Top Recovered</h4>
                            <ul id="country_recovered" class="alt-green">
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center text-center">
                    <div class="col">
                        <div class="google-ads-leaderboard">
                            <img src="images/ads/ads2.jpg" alt="" class="img-fluid">
                            <p>Add you ads here</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">WHO Latest News</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul id="news"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">WHO Latest Situation</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul id="situation"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Asia</h4>
                            </div>
                            <div class="card-body">
                                <div class="all-country table-responsive">
                                    <table id="world_table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width:30px">Serial</th>
                                                <th>Flag</th>
                                                <th style="width:200px">Country</th>
                                                <th>Cases</th>
                                                <th>New Cases</th>
                                                <th>Deaths</th>
                                                <th>New Deaths</th>
                                                <th>Recovered</th>
                                                <th>Active</th>
                                                <th>Critical</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="copy_right">
                            Copyright © 2021 <span style="color: blue"><a href="/">cov19-tracker.site</a></span> . All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 text-lg-right text-center">
                        <div class="social">
                            <a href="https://www.youtube.com/"><i
                                    class="fab fa-youtube"></i></a>
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-right">
            <a class="sidebar-right-trigger" href="javascript:void(0)">
                <span><i class="fa fa-cog fa-spin"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <div class="admin-settings">
                    <div class="opt-header-color">
                        <p>Background Color</p>
                        <div>
                            <span>
                                <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary"
                                    id="header_color_1">
                                <label for="header_color_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary"
                                    id="header_color_2">
                                <label for="header_color_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary"
                                    id="header_color_3">
                                <label for="header_color_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary"
                                    id="header_color_4">
                                <label for="header_color_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary"
                                    id="header_color_5">
                                <label for="header_color_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_6" class="filled-in chk-col-primary"
                                    id="header_color_6">
                                <label for="header_color_6"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Direction</p>
                        <select class="form-control" name="theme_direction" id="theme_direction">
                            <option value="ltr">LTR</option>
                            <option value="rtl">RTL</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
 
    </div>

    



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src='vendor/fixed-header-table/jquery.fixedheadertable.min.html'></script>
    <script src="js/plugins/fixedheadertable-init.js"></script>
    <script src='vendor/chartjs/Chart.bundle.min.js'></script>


    <script src="vendor/vectormap/jquery.vmap.min.js"></script>
    <script src="vendor/vectormap/jquery.vmap.world.js"></script>

    <script src="js/world/vectormap-world.js"></script>

    <script src="vendor/datatable/jquery.dataTables.min.js"></script>
    <script src="js/world/datatable.js"></script>

    <script src="js/world/dashboard.js"></script>
    <script src="js/world/chart.js"></script>
    <script src="js/scripts.js"></script>
    
    <script src="js/settings.js"></script>
    <script src="js/quixnav-init.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>



</html>