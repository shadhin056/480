<!DOCTYPE html>
<html>
    <head><title>Facebook</title><style>
        table{
            align-content: center;
            text-align: left;
        }
        
        header, footer {

    color: white;
    background-color: #3b5998;
    clear: left;
    text-align: center;
}
        header{
            height: 70px;
            font-display: block;
            
        }
        </style></head>
    <body>
<div class="container">
    <header>
   <h1>facebook</h1>
</header>
<div id="register" class="animate form">
                            <form  action="welcome_get.php" method="get" autocomplete="on"> 
                                <table align="center" style="width:50%">
                                <tr><td colspan="2"><h1> Create An Account </h1> </td></tr>
                                <tr><p> 
                                    <td><label for="usernamesignup" class="uname" data-icon="u">Your username</label></td>
                                    <td><input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" size="35" /></td>
                                </p>
                                    </tr>
                                <tr>
                                <p> 
                                   <td> <label for="emailsignup" class="youmail" data-icon="e" > Your email</label></td>
                                    <td><input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com" size="35"/> </td>
                                </p>
                                    </tr>
                                    <tr>
                                <p> 
                                   <td> <label for="reenteremailsignup" class="youmail" data-icon="e" > Re-enter Your email</label></td>
                                    <td><input id="reenteremailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com" size="35"/> </td>
                                </p>
                                    </tr>
                                <tr>
                                <p> 
                                    <td><label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label></td>
                                    <td><input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO" size="35"/></td>
                                </p>
                                    </tr>
                                <tr>
                                <p> 
                                    <td><label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label></td>
                                    <td><input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO" size="35"/></td>
                                </p>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>
                                                <h3>Birthday</h3>
                                            
<select name='day' required="required" id='dayddl'>
    <option value=''>Day</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>


<select name='month' required id='monthddl'>
    <option value=''>Month</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
</select>


<select name='day' id='blah' required>
    <option value=''>Year</option>
<option value='1947'>1947</option>
<option value='1948'>1948</option>
<option value='1949'>1949</option>
<option value='1950'>1950</option>
<option value='1951'>1951</option>
<option value='1952'>1952</option>
<option value='1953'>1953</option>
<option value='1954'>1954</option>
<option value='1955'>1955</option>
<option value='1956'>1956</option>
<option value='1957'>1957</option>
<option value='1958'>1958</option>
<option value='1959'>1959</option>
<option value='1960'>1960</option>
<option value='1961'>1961</option>
<option value='1962'>1962</option>
<option value='1963'>1963</option>
<option value='1964'>1964</option>
<option value='1965'>1965</option>
<option value='1966'>1966</option>
<option value='1967'>1967</option>
<option value='1968'>1968</option>
<option value='1969'>1969</option>
<option value='1970'>1970</option>
<option value='1971'>1971</option>
<option value='1972'>1972</option>
<option value='1973'>1973</option>
<option value='1974'>1974</option>
<option value='1975'>1975</option>
<option value='1976'>1976</option>
<option value='1977'>1977</option>
<option value='1978'>1978</option>
<option value='1979'>1979</option>
<option value='1980'>1980</option>
<option value='1981'>1981</option>
<option value='1982'>1982</option>
<option value='1983'>1983</option>
<option value='1984'>1984</option>
<option value='1985'>1985</option>
<option value='1986'>1986</option>
<option value='1987'>1987</option>
<option value='1988'>1988</option>
<option value='1989'>1989</option>
<option value='1990'>1990</option>
<option value='1991'>1991</option>
<option value='1992'>1992</option>
<option value='1993'>1993</option>
    <option value='1994'>1994</option>
    <option value='1995'>1995</option>
    <option value='1996'>1996</option>
    <option value='1997'>1997</option>
    <option value='1998'>1998</option>
    <option value='1999'>1999</option>
    <option value='2000'>2000</option>
    <option value='2001'>2001</option>
    <option value='2002'>2002</option>
    <option value='2003'>2003</option>
    <option value='2004'>2004</option>
    <option value='2005'>2005</option>
    <option value='2006'>2006</option>
    <option value='2007'>2007</option>
    <option value='2008'>2008</option>
    <option value='2009'>2009</option>
    <option value='2010'>2010</option>
    
</select>
                                            </p>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                    <td colspan="2">
                                        <p><input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" required="required" value="female"> Female
</p>    
                                    </td>
                                    </tr>
                                    
                                <tr>
                                <p class="signin button"> 
									<td colspan="2"><input type="submit" value="Sign up"/> </td>
								</p>
                                    </tr>
                                <!--<tr>
                                <td colspan="2"><p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p></td>
                                    </tr>-->
                                    </table>
                            </form>
                        </div>
    <footer>Copyright &copy; Parvez</footer>
    </div>
        </body>
</html>
