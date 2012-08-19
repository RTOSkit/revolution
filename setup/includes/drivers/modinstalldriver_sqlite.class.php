<?php
/*
 * MODX Revolution
 *
 * Copyright 2006-2012 by MODX, LLC.
 * All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */
require_once (strtr(realpath(dirname(__FILE__)), '\\', '/') . '/modinstalldriver.class.php');
/**
 * Provides query abstraction for setup using the sqlite native database driver.
 *
 * @package setup
 * @subpackage drivers
 */
class modInstallDriver_sqlite extends modInstallDriver {
    /**
     * Collations Support
     */    
    private $collations_support = array( 'utf8_general_ns','utf16_general_ns');
    /**
     * Collation Default
     */            
    private $collation_default = 'utf8_general_ci';
    /**
     * Charset Default
     */        
    private $charset_default = 'utf8';
    /**
     * Charsets Support
     */    
    private $charsets_support = array('utf8','utf16'); 
    /**
     * 
     * Check for sqlite extension
     * {@inheritDoc}
     */
    public function verifyExtension() {
        return extension_loaded('sqlite');
    }

    /**
     * Check for sqlite_pdo extension
     * {@inheritDoc}
     */
    public function verifyPDOExtension() {
        return extension_loaded('PDO_sqlite');
    }

    /**
     * SQL Server syntax for default collation query
     * {@inheritDoc}
     */
    public function getCollation() {
        $collation = $this->collation_default;
        return $collation;
    }

    /**
     * SQL Server syntax for collation listing
     * {@inheritDoc}
     */
    public function getCollations($collation = '') {        
         
        $collations = array();               
        foreach($this->collations_support as $c_item) {
           $col = array();        
           $col['selected'] = ($c_item==$collation ? ' selected="selected"' : '');
           $col['value'] = $c_item;
           $col['name'] = $c_item;
           $collations[$c_item] = $col;       
        }
        return $collations;
    }

    public function getCharset($collation = '') {
        $charset = $this->charset_default;
        if (empty($collation)) {
            $collation = $this->getCollation();
        }
        $pos = strpos($collation, '_');
        if ($pos > 0) {
            $charset = substr($collation, 0, $pos);
        }
        return $charset;
    }

    /**
     * SQL Server syntax for charset listing
     * {@inheritDoc}
     */
    public function getCharsets($charset = '') {
        $charsets = array();               
        foreach($this->charsets_support as $cs_item) {
           $col = array();        
           $col['selected'] = ($cs_item==$collation ? ' selected="selected"' : '');
           $col['value'] = $cs_item;
           $col['name'] = $cs_item;
           $charsets[$cs_item] = $col;       
        }        
        return $charsets;
    }

    /**
     * SQL Server syntax for table prefix check
     * {@inheritDoc}
     */
    public function testTablePrefix($database,$prefix) {
        return 'SELECT COUNT('.$this->xpdo->escape('id').') AS '.$this->xpdo->escape('ct').' FROM '.$this->xpdo->escape($prefix.'site_content');
    }

    /**
     * SQL Server syntax for table truncation
     * {@inheritDoc}
     */
    public function truncate($table) {
        return 'TRUNCATE '.$this->xpdo->escape($table);
    }

    /**
     * SQL Server check for server version
     *
     * @TODO Get this to actually check the server version.
     *
     * {@inheritDoc}
     */
    public function verifyServerVersion() {
        return array('result' => 'success','message' => $this->install->lexicon('sqlite_version_success',array('version' => '')));

        $handler = @sqlite_connect($this->install->settings->get('database_server'),$this->install->settings->get('database_user'),$this->install->settings->get('database_password'));
        $serverInfo = @sqlite_server_info($handler);
        $sqliteVersion = $serverInfo['SQLServerVersion'];
        $sqliteVersion = $this->_sanitizeVersion($sqliteVersion);
        if (empty($sqliteVersion)) {
            return array('result' => 'warning', 'message' => $this->install->lexicon('sqlite_version_server_nf'),'version' => $sqliteVersion);
        }

        $sqlite_ver_comp = version_compare($sqliteVersion,'3.0.0','>=');

        if (!$sqlite_ver_comp) { /* ancient driver warning */
            return array('result' => 'failure','message' => $this->install->lexicon('sqlite_version_fail',array('version' => $sqliteVersion)),'version' => $sqliteVersion);
        } else {
            return array('result' => 'success','message' => $this->install->lexicon('sqlite_version_success',array('version' => $sqliteVersion)),'version' => $sqliteVersion);
        }
    }

    /**
     * SQL Server check for client version
     *
     * @TODO Get this to actually check the client version.
     *
     * {@inheritDoc}
     */
    public function verifyClientVersion() {
        return array('result' => 'success', 'message' => $this->install->lexicon('sqlite_version_client_success',array('version' => '')));

        $clientInfo = @sqlite_client_info();
        $sqliteVersion = $clientInfo['DriverVer'];
        $sqliteVersion = $this->_sanitizeVersion($sqliteVersion);
        if (empty($sqliteVersion)) {
            return array('result' => 'warning','message' => $this->install->lexicon('sqlite_version_client_nf'),'version' => $sqliteVersion);
        }

        $sqlite_ver_comp = version_compare($sqliteVersion,'10.50.0','>=');
        if (!$sqlite_ver_comp) {
            return array('result' => 'warning','message' => $this->install->lexicon('sqlite_version_client_old',array('version' => $sqliteVersion)),'version' => $sqliteVersion);
        } else {
            return array('result' => 'success','message' => $this->install->lexicon('sqlite_version_success',array('version' => $sqliteVersion)),'version' => $sqliteVersion);
        }
    }

    /**
     * SQL Server syntax to add an index
     * {@inheritDoc}
     */
    public function addIndex($table,$name,$column) {
        return 'ALTER TABLE '.$this->xpdo->escape($table).' ADD INDEX '.$this->xpdo->escape($name).' ('.$this->xpdo->escape($column).')"';
    }

    /**
     * SQL Server syntax to drop an index
     * {@inheritDoc}
     */
    public function dropIndex($table,$index) {
        return 'ALTER TABLE '.$this->xpdo->escape($table).' DROP INDEX '.$this->xpdo->escape($index);
    }


    /**
     * Cleans a sqlite version string that often has extra junk in certain distros
     *
     * @param string $sqliteVersion The version note to sanitize
     * @return string The sanitized version
     */
    protected function _sanitizeVersion($sqliteVersion) {
        return $sqliteVersion;
    }
}