mod_multijscss
==============

Ce module pour Joomla permet d'intégrer des fichiers JS et CSS - et leurs images - dans un article.

Les fichiers JS et CSS sont localisés dans le répertoire media/mod_multijscss/

#### Exemple : HTML pour 2048  ####


``` html
{loadposition 2048}
<div class="conteneur">
    <div class="heading">
      <h1 class="title">2048</h1>
      <div class="scores-container">
        <div class="score-container">0</div>
        <div class="best-container">0</div>
      </div>
    </div>

    <div class="above-game">
      <p class="game-intro">Join the numbers and get to the <strong>2048 tile!</strong></p>
      <a class="restart-button">New Game</a>
    </div>

    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Keep going</a>
          <a class="retry-button">Try again</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>

      <div class="tile-container">

      </div>
    </div>

    <p class="game-explanation">
      <strong class="important">How to play:</strong> Use your <strong>arrow keys</strong> to move the tiles. When two tiles with the same number touch, they <strong>merge into one!</strong>
    </p>
    <hr>
    <p>
    <strong class="important">Note:</strong> This site is the official version of 2048. You can play it on your phone via <a href="http://git.io/2048">http://git.io/2048.</a> All other apps or sites are derivatives or fakes, and should be used with caution.
    </p>
    <hr>
    <p>
    Created by <a href="http://gabrielecirulli.com" target="_blank">Gabriele Cirulli.</a> Based on <a href="https://itunes.apple.com/us/app/1024!/id823499224" target="_blank">1024 by Veewo Studio</a> and conceptually similar to <a href="http://asherv.com/threes/" target="_blank">Threes by Asher Vollmer.</a>
    </p>
  </div>

```

#### Exemples : HTML pour TableSorter  ####
##### Exemple de base #####

``` html
<p>Démo Table sorter</p>
{loadposition tablesorter1}
<table id="tablesorter-demo" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Age</th>
				<th>Total</th>
				<th>Discount</th>
				<th>Difference</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Peter</td>
				<td>Parker</td>
				<td>28</td>
				<td>$9.99</td>
				<td>20.9%</td>
				<td>+12.1</td>
				<td>Jul 6, 2006 8:14 AM</td>
			</tr>
			<tr>
				<td>John</td>
				<td>Hood</td>
				<td>33</td>
				<td>$19.99</td>
				<td>25%</td>
				<td>+12</td>
				<td>Dec 10, 2002 5:14 AM</td>
			</tr>
			<tr>
				<td>Clark</td>
				<td>Kent</td>
				<td>18</td>
				<td>$15.89</td>
				<td>44%</td>
				<td>-26</td>
				<td>Jan 12, 2003 11:14 AM</td>
			</tr>
			<tr>
				<td>Bruce</td>
				<td>Almighty</td>
				<td>45</td>
				<td>$153.19</td>
				<td>44.7%</td>
				<td>+77</td>
				<td>Jan 18, 2001 9:12 AM</td>
			</tr>
			<tr>
				<td>Bruce</td>
				<td>Evans</td>
				<td>22</td>
				<td>$13.19</td>
				<td>11%</td>
				<td>-100.9</td>
				<td>Jan 18, 2007 9:12 AM</td>
			</tr>
			<tr>
				<td>Bruce</td>
				<td>Evans</td>
				<td>22</td>
				<td>$13.19</td>
				<td>11%</td>
				<td>0</td>
				<td>Jan 18, 2007 9:12 AM</td>
			</tr>
		</tbody>
	</table>

```

##### Exemple dans example-widgets.html #####

``` html
<p>Table sorter widgets</p>

{loadposition tablesorterWidget} 
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th>Name</th>
			<th>Major</th>
			<th>Sex</th>
			<th>English</th>
			<th>Japanese</th>
			<th>Calculus</th>
			<th>Geometry</th>

		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>Name</th>
			<th>Major</th>
			<th>Sex</th>
			<th>English</th>
			<th>Japanese</th>
			<th>Calculus</th>
			<th>Geometry</th>

		</tr>
	</tfoot>
	<tbody>
		<tr>
			<td>Student01</td>
			<td>Languages</td>
			<td>male</td>

			<td>80</td>
			<td>70</td>
			<td>75</td>
			<td>80</td>
		</tr>
		<tr>
			<td>Student02</td>

			<td>Mathematics</td>
			<td>male</td>
			<td>90</td>
			<td>88</td>
			<td>100</td>
			<td>90</td>

		</tr>
		<tr>
			<td>Student03</td>
			<td>Languages</td>
			<td>female</td>
			<td>85</td>
			<td>95</td>

			<td>80</td>
			<td>85</td>
		</tr>
		<tr>
			<td>Student04</td>
			<td>Languages</td>
			<td>male</td>

			<td>60</td>
			<td>55</td>
			<td>100</td>
			<td>100</td>
		</tr>
		<tr>
			<td>Student05</td>

			<td>Languages</td>
			<td>female</td>
			<td>68</td>
			<td>80</td>
			<td>95</td>
			<td>80</td>

		</tr>
		<tr>
			<td>Student06</td>
			<td>Mathematics</td>
			<td>male</td>
			<td>100</td>
			<td>99</td>

			<td>100</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student07</td>
			<td>Mathematics</td>
			<td>male</td>

			<td>85</td>
			<td>68</td>
			<td>90</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student08</td>

			<td>Languages</td>
			<td>male</td>
			<td>100</td>
			<td>90</td>
			<td>90</td>
			<td>85</td>

		</tr>
		<tr>
			<td>Student09</td>
			<td>Mathematics</td>
			<td>male</td>
			<td>80</td>
			<td>50</td>

			<td>65</td>
			<td>75</td>
		</tr>
		<tr>
			<td>Student10</td>
			<td>Languages</td>
			<td>male</td>

			<td>85</td>
			<td>100</td>
			<td>100</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student11</td>

			<td>Languages</td>
			<td>male</td>
			<td>86</td>
			<td>85</td>
			<td>100</td>
			<td>100</td>

		</tr>
		<tr>
			<td>Student12</td>
			<td>Mathematics</td>
			<td>female</td>
			<td>100</td>
			<td>75</td>

			<td>70</td>
			<td>85</td>
		</tr>
		<tr>
			<td>Student13</td>
			<td>Languages</td>
			<td>female</td>

			<td>100</td>
			<td>80</td>
			<td>100</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student14</td>

			<td>Languages</td>
			<td>female</td>
			<td>50</td>
			<td>45</td>
			<td>55</td>
			<td>90</td>

		</tr>
		<tr>
			<td>Student15</td>
			<td>Languages</td>
			<td>male</td>
			<td>95</td>
			<td>35</td>

			<td>100</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student16</td>
			<td>Languages</td>
			<td>female</td>

			<td>100</td>
			<td>50</td>
			<td>30</td>
			<td>70</td>
		</tr>
		<tr>
			<td>Student17</td>

			<td>Languages</td>
			<td>female</td>
			<td>80</td>
			<td>100</td>
			<td>55</td>
			<td>65</td>

		</tr>
		<tr>
			<td>Student18</td>
			<td>Mathematics</td>
			<td>male</td>
			<td>30</td>
			<td>49</td>

			<td>55</td>
			<td>75</td>
		</tr>
		<tr>
			<td>Student19</td>
			<td>Languages</td>
			<td>male</td>

			<td>68</td>
			<td>90</td>
			<td>88</td>
			<td>70</td>
		</tr>
		<tr>
			<td>Student20</td>

			<td>Mathematics</td>
			<td>male</td>
			<td>40</td>
			<td>45</td>
			<td>40</td>
			<td>80</td>

		</tr>
		<tr>
			<td>Student21</td>
			<td>Languages</td>
			<td>male</td>
			<td>50</td>
			<td>45</td>

			<td>100</td>
			<td>100</td>
		</tr>
		<tr>
			<td>Student22</td>
			<td>Mathematics</td>
			<td>male</td>

			<td>100</td>
			<td>99</td>
			<td>100</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student23</td>

			<td>Languages</td>
			<td>female</td>
			<td>85</td>
			<td>80</td>
			<td>80</td>
			<td>80</td>

		</tr>
	</tbody>
</table>

```
