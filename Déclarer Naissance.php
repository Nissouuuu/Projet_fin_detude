
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déclarer Naissance</title>
    <link rel='stylesheet' href="CSS/style2.css">
</head>
<style>#cas {
    width: 280px;
}</style>
<body>
    <div class="style2">
<h1>Déclarer Naissance</h1><br>

<form action="Déclarer Naissance_post.php" method="post">

<input type="text" name="Nom" id="Nom" placeholder="Nom"> <input type="text" name="Prenom" id="Prenom" placeholder="Prenom"><br>
<h7>Sexe:</h7>
<select id="mySelect" name="sexe" title="sexe choisir male ou femelle" >
<option disabled selected>Choisir Un Sexe</option>
<option value="Male">Male</option>
<option value="Femelle">Femelle</option></select><br>
<h7>Cas Exceptionnel:</h7>
<select id="cas" name="Exp" title="choisir X ou Fille_Mére" >
<option onclick="function()" selected value="Choisir Un Cas" selected>Choisir Un Cas</option>
<option onclick="function()" value="X">X</option>
<option onclick="function()" value="Fille_Mere">Fille_Mére</option></select><br>
<h7 class="hh">Description:</h7><textarea  id="Des" placeholder="Exprime la situation" name="description" required></textarea><br>
<h7>Wilaya:</h7><select id="mySelect" aria-label="Wilaya" name="wilaya" id="wilaya" title="Wilaya" >
<option disabled selected>Choisir Une Wilaya</option>    
<option value="Adrar">Adrar</option><option value="Chlef">Chlef</option><option value="Laghouat">Laghouat</option><option value="Oum El Bouaghi">Oum El Bouaghi</option><option value="Batna">Batna</option><option value="Bejaia">Bejaia</option><option value="Biskra">Biskra</option><option value="Bechar">Bechar</option><option value="Blida">Blida</option><option value="Bouira">Bouira</option><option value="Tamanrasset">Tamanrasset</option><option value="Tebessa">Tebessa</option><option value="Tlemcen">Tlemcen</option><option value="Tiaret">Tiaret</option><option value="Tizi Ouzou">Tizi Ouzou</option><option value="Alger">Alger</option><option value="Djelfa">Djelfa</option><option value="Jijel">Jijel</option><option value="Setif">Setif</option><option value="Saida">Saida</option><option value="Skikda">Skikda</option><option value="Sidi Bel Abbes">Sidi Bel Abbes</option><option value="Annaba">Annaba</option><option value="Guelma">Guelma</option><option value="Constantine">Constantine</option><option value="Medea">Medea</option><option value="Mostaganem">Mostaganem</option><option value="M'Sila">M'Sila</option><option value="Mascara">Mascara</option><option value="Ouargla">Ouargla</option><option value="Oran">Oran</option><option value="El Bayadh">El Bayadh</option><option value="Illizi">Illizi</option><option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option><option value="Boumerdes">Boumerdes</option><option value="El Tarf">El Tarf</option><option value="Tindouf">Tindouf</option><option value="Tissemsilt">Tissemsilt</option><option value="El Oued">El Oued</option><option value="Khenchela">Khenchela</option><option value="Souk Ahras">Souk Ahras</option><option value="Tipaza">Tipaza</option><option value="Mila">Mila</option><option value="Ain Defla">Ain Defla</option><option value="Naama">Naama</option><option value="Ain Temouchent">Ain Temouchent</option><option value="Ghardaia">Ghardaia</option><option value="Relizane">Relizane</option></select>             <h7>Commune:</h7>  
    <input name="Mairie" type="text" id="Mairie" value="" ><br>
<h7>Date De Naissance:</h7>

<select aria-label="Jour" name="birthday_day" id="day" title="Jour" class="_9407 _5dba _9hk6 _8esg"></select>
<select aria-label="Mois" name="birthday_month" id="month" title="Mois" class="_9407 _5dba _9hk6 _8esg"></select>
<select aria-label="Année" name="birthday_year" id="year" title="Année" class="_9407 _5dba _9hk6 _8esg"></select><br>
<h7>Heure de Naissance:</h7>  
    <input name="Heure" type="text" id="heure" value="12:00"><br><br><br>
    <div id="khafi">
        <h2>Information Paternelle</h2><br>
        <div id="djoudi">
    <input type="text" placeholder="Numero d'acte Pére" name="nump" id="">

 <input type="text" name="prenomp" id="" placeholder="Prenom Pére"><br>

<h7>Date De Naissance De Pére:</h7>

<select aria-label="Jour" name="birthday_day_p" id="dayp" title="Jour" class="_9407 _5dba _9hk6 _8esg"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21" selected="1">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
<select aria-label="Mois" name="birthday_month_p" id="monthp" title="Mois" class="_9407 _5dba _9hk6 _8esg"><option value="1">jan</option><option value="2">fév</option><option value="3" selected="1">mar</option><option value="4">avr</option><option value="5">mai</option><option value="6">jun</option><option value="7">juil</option><option value="8">août</option><option value="9">sep</option><option value="10">oct</option><option value="11">nov</option><option value="12">déc</option></select>
<select aria-label="Année" name="birthday_year_p" id="yearp" title="Année" class="_9407 _5dba _9hk6 _8esg"><option value="2024" selected="1">2024</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select><br>   
</div>
<input type="text" placeholder="Numero d'acte Mére" name="numm" id="champs-bloques">

<input type="text" name="nomm" id="" placeholder="Nom Mére"> <input type="text" name="prenomm" id="" placeholder="Prenom Mére"><br>
<h7 class="ha">Date De Naissance De Mére:</h7>

<select aria-label="Jour" name="birthday_day_m" id="daym" title="Jour" class="_9407 _5dba _9hk6 _8esg"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21" selected="1">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
<select aria-label="Mois" name="birthday_month_m" id="monthm" title="Mois" class="_9407 _5dba _9hk6 _8esg"><option value="1">jan</option><option value="2">fév</option><option value="3" selected="1">mar</option><option value="4">avr</option><option value="5">mai</option><option value="6">jun</option><option value="7">juil</option><option value="8">août</option><option value="9">sep</option><option value="10">oct</option><option value="11">nov</option><option value="12">déc</option></select>
<select aria-label="Année" name="birthday_year_m" id="yearm" title="Année" class="_9407 _5dba _9hk6 _8esg"><option value="2024" selected="1">2024</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>
<br>
</div>
    <a href="Front.php"><input type="submit" name="submit" id="submit"></a><br>   
</form> 
</div>
</body>
<script src="change automatique.js"></script>
<script src="heure auto.js"></script>

<script>

document.addEventListener('DOMContentLoaded', function () {
    const casSelect = document.getElementById('cas');
    const bloq = document.getElementById('khafi');
    const jodi = document.getElementById('djoudi');

    

    casSelect.addEventListener('change', function() {

        if (casSelect.value === 'X') {
            bloq.style.display = 'none';
        }
        
        
        
        if (casSelect.value === 'Choisir Un Cas') {
            bloq.style.display = 'block';
            jodi.style.display = 'block';
        }


        if (casSelect.value === 'Fille_Mere') {
            bloq.style.display = 'block';
            jodi.style.display = 'none';
            
        }
    

            
            });



    });
         
    
</script>
</html>
