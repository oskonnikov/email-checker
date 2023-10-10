<?php

namespace Oskonnikov\EmailChecker;

class EmailCheckerManager {

    /**
     * The email checker instance.
     *
     * @var \Oskonnikov\EmailCheckerPHP\EmailChecker
     */
    protected $checker;

    /**
     * Create a new email checker instance.
     *
     * @param \Oskonnikov\EmailCheckerPHP\EmailChecker $checker
     * @return void
     */
    public function __construct($checker)
    {
        $this->checker = $checker;
    }

    /**
     * To verify an email address exist.
     * @return bool
     */
    public function check($email): bool
    {
        return $this->checker->check($email);
    }
}

