<?php

/*
  Whois2.php	PHP classes to conduct whois queries
  
  Copyright (C)1999,2000 easyDNS Technologies Inc. & Mark Jeftovic
  
  Maintained by Mark Jeftovic <markjr@easydns.com>     
  
  For the most recent version of this package: 
  
  http://www.easydns.com/~markjr/whois2/
  
  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.
  
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
  
  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

/* servers.whois	v18   Markus Welters	2004/06/25 */
/* servers.whois	v17	ross golder	2003/02/09 */
/* servers.whois	v16	mark jeftovic	2001/02/28 */

$this->DATA_VERSION = "18";

$this->DATA = array(
	"at"	=> "at",
	"au"	=> "au",
	"biz"	=> "biz",
	"be"	=> "be",
	"br"	=> "br",
	"ca"	=> "ca",
	"ch"	=> "ch",
	"cn"	=> "cn",
	"com"	=> "gtld",
	"de"	=> "de",
	"es"	=> "es",
	"fm"	=> "fm",
	"hu"	=> "hu",
	"info"	=> "info",
	"is"	=> "is",
	"li"	=> "ch",
	"lu"	=> "lu",
	"mx"	=> "mx",
	"net"	=> "gtld",
	"nl"	=> "nl",
	"nu"	=> "nu",
	"org"	=> "org",
	"se"	=> "se",
	"tv"	=> "gtld",
	"uk"	=> "uk",
	"us"	=> "us",
	"ws"	=> "ws",
        "ipw"	=> "ipw" // Dummy, just for ip whois
	);

/* If whois Server needs any parameters, enter it here */

$this->WHOIS_PARAM = array(
	"com" => "=",
	"de" => "-T dn,ace "
	);

$this->HTTPW = array(
		"bg"	 => "http://www.register.bg/bg-nic/displaydomain.pl?domain={domain}.{tld}&search=exist",
		"es"     => "https://www.nic.es/esnic/servlet/WhoisControllerHTML?dominio={domain}.{tld}&tipo=dominio",
		"co.za"  => "http://co.za/cgi-bin/whois.sh?Domain={domain}.{tld}",
		"fm"     => "http://www.dot.fm/query_whois.cfm?domain={domain}&tld=fm",
		"gs"     => "http://www.adamsnames.tc/whois/?domain={domain}.{tld}",
		"in"     => "whois.ncst.ernet.in",
		"ms"     => "http://www.adamsnames.tc/whois/?domain={domain}.{tld}",
		"net.au" => "whois.aunic.net",
		"tc"     => "http://www.adamsnames.tc/whois/?domain={domain}.{tld}",
		"tf"     => "http://www.adamsnames.tc/whois/?domain={domain}.{tld}",
		"vg"     => "http://www.adamsnames.tc/whois/?domain={domain}.{tld}"
		);
?>