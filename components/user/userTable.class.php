<?php

class UserTable extends Table {

    public function __construct($im) {
        parent::__construct($im);
        $this->name = 'user';
        $this->addColumn(new IntegerColumn($this, 'id'), null, true);
        $this->addColumn(new StringColumn($this, 'email', 255));
        $this->addColumn(new StringColumn($this, 'password', 255));
        $this->addColumn(new StringColumn($this, 'firstname', 255));
        $this->addColumn(new StringColumn($this, 'lastname', 255));
        $this->addColumn(new StringColumn($this, 'country', 100));
        $this->addColumn(new StringColumn($this, 'city', 255));
        $this->addColumn(new StringColumn($this, 'zip', 50));
        $this->addColumn(new DoubleColumn($this, 'latitude'), null);
        $this->addColumn(new StringColumn($this, 'longitude'), null);
        $this->addColumn(new IntegerColumn($this, 'last_login'), 0);
        $this->addColumn(new BooleanColumn($this, 'active'), 0);
        $this->addColumn(new StringColumn($this, 'activation_hash', 32));
        $this->addColumn(new StringColumn($this, 'forgot_hash', 32));
    }

}