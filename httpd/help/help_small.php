<!-- 
 deltaBox - Algorithmic Non-Intrusive Load Monitoring
 
 Copyright (c) 2008-2009 Mikael Mieskolainen.
 Licensed under the MIT License <http:opensource.org/licenses/MIT>.
 
 Permission is hereby  granted, free of charge, to any  person obtaining a copy
 of this software and associated  documentation files (the "Software"), to deal
 in the Software  without restriction, including without  limitation the rights
 to  use, copy,  modify, merge,  publish, distribute,  sublicense, and/or  sell
 copies  of  the Software,  and  to  permit persons  to  whom  the Software  is
 furnished to do so, subject to the following conditions:
 
 The above copyright notice and this permission notice shall be included in all
 copies or substantial portions of the Software.
 
 THE SOFTWARE  IS PROVIDED "AS  IS", WITHOUT WARRANTY  OF ANY KIND,  EXPRESS OR
 IMPLIED,  INCLUDING BUT  NOT  LIMITED TO  THE  WARRANTIES OF  MERCHANTABILITY,
 FITNESS FOR  A PARTICULAR PURPOSE AND  NONINFRINGEMENT. IN NO EVENT  SHALL THE
 AUTHORS  OR COPYRIGHT  HOLDERS  BE  LIABLE FOR  ANY  CLAIM,  DAMAGES OR  OTHER
 LIABILITY, WHETHER IN AN ACTION OF  CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE  OR THE USE OR OTHER DEALINGS IN THE
 SOFTWARE.
-->

<?php

session_start(); 
if (isset ($_SESSION['un'])) {

   	$main_page = $_GET['p']; //embedded help
   	$under_page = $_GET['dp']; //embedded help
   	
   	if ($main_page=="power") {
	   	
	   	if ($under_page=="live") {

		   	echo "<p>Relative consumption measures your house and living style energy efficiency!</p>";
		
		}
		
		if ($under_page=="statistics") {

		   	echo "<p>Instant feedback helps you to change your customs. Check your actualized costs in realtime! </p>";
		
		}
		
		if ($under_page=="graphics") {

		   	echo "<p>You can zoom your view, by selecting area with mouse!</p>";
		   	echo "<p>For performance and stability, use only Firefox, Opera, Chrome or Safari!</p>";
		   	echo "<p>Press CTRL when selecting multiple measurements!</p>";
		
		}
		
		if ($under_page=="forecast") {

		   	echo "<p>Save energy by keeping air conditioner clean and at the right speed!</p>";
		
		}

	}		
	
	if ($main_page=="complex") { 

		echo "<p>No instructions.</p>";

	}
	
	if ($main_page=="tools") { 

		echo "<p>Use drop down menu to view system logs.</p>";
		echo "<p>System info shows statistics of flash SD-card.</p>";

	}
	
	if ($main_page=="settings") { 

		echo "<p>No instructions.</p>";

	}	
		
}	
?>