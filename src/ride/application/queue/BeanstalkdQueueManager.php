<?php

namespace ride\application\queue;

use Beanstalk\Client;

use ride\application\system\System;

use ride\library\queue\BeanstalkdQueueManager as LibBeanstalkdQueueManager;


/**
 * Beanstalkd implementation for the queue manager
 */
class BeanstalkdQueueManager extends LibBeanstalkdQueueManager {

    /**
     * Constructs a new queue manager
     * @param \ride\application\system\System $system Instance of the system
     * @param \Beanstalk\Client $client Instance of the Beanstalk client
     * @param integer $ttr Time to run, number of seconds to allow a worker to
	 * run this job. The minimum ttr is 1
     * @return null
     */
    public function __construct(System $system, Client $client, $ttr = 3600) {
        $this->system = $system;

        parent::__construct($client, $ttr);
    }

    /**
     * Gets the instance of the system
     * @return ride\application\system\System
     */
    public function getSystem() {
        return $this->system;
    }

}
