<?php

namespace Pereuda\lab4\creditinterest;

interface interfacepercent {
    /**
     * @param $summcredit
     * @param $rateperiod
     * @param $numberperiods
     */
    public function indebtedness ($summcredit, $rateperiod, $numberperiods);
}

