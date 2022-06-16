<?php
class ViewModel
{
    private $hostname;

    public function __construct()
    {
        $this->hostname = gethostname();
    }

    public function extendPath(string $path, $contents = array()): string
    {
        if (is_array($contents) && !empty(($contents))) :
            extract($contents);
        endif;

        if ($this->verifyClowHost()) {
            return "/var/www/html/flevonautica/" . $path;
        }
        return $path;
    }

    public function extendRoute(): string
    {
        if ($this->verifyClowHost()) {
            return "flevonautica/";
        }
        return "";
    }

    public function verifyClowHost(): bool
    {
        // Simply verifies whether we're dealing with the clow server or not (windesheim server)
        return $this->hostname === "1ff251042ff0";
    }
}
