<?php namespace wisnubaldas\datatables\DB;

use Db;
use wisnubaldas\datatables\Query;

/**
 * Class PSAdapter
 * @package wisnubaldas\datatables\DB
 */
class PSAdapter extends DBAdapter
{
    /**
     * @var
     */
    protected $Db;
    /**
     * @var
     */
    protected $config;

    /**
     * PSAdapter constructor.
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * @return $this
     */
    public function connect()
    {
        $this->Db = Db::getInstance();

        return $this;
    }

    /**
     * @param Query $query
     * @param bool $array
     * @param bool $user_cache
     * @return mixed
     */
    public function query(Query $query, $array = true, $user_cache = true)
    {
        return $this->Db->executeS($query, $array, $user_cache);
    }

    /**
     * @param Query $query
     * @return mixed
     */
    public function count(Query $query)
    {
        $data = $this->Db->getRow("Select count(*) as rowcount from ($query)t");

        return $data['rowcount'];
    }

    /**
     * @param $string
     * @param Query $query
     * @return string
     */
    public function escape($string, Query $query)
    {
        return "'".pSQL($string)."'";
    }
}
