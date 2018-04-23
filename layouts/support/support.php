<div class="support">

	<div class="support__intro">

		<h1 class="support__h1">Support</h1>

		<div class="support__tagline">
			We love helping our customers!
		</div>

		<svg class="wave" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="50 20 50 80" preserveAspectRatio="none">
			<path d="M0,100 C15,100 35,50 50,50 L50,50 C65,50 85,100 100,100 Z"></path>
		</svg>

	</div>

	<div class="support__portal">

		<div class="support__portal__container">

			<div class="support__portal__container-text">

				<h2 class="support__portal__title">
					AVS Support Help Portal
				</h2>

				<p>
					The AVS Support Help Center will guide you to self-solve an issue or send a help request to the AVS Support team. Here you can inquire about a number of different topics including: licensing, download links, submit technical and product questions, and more.
				</p>

				<?php render('/components/btn/btn.php', [
					'text' => 'Enter Here',
					'link' => 'https://avsdev.atlassian.net/servicedesk/customer/portal/1',
				]); ?>

				<div class="support__passwords">

					<h3>
						Password Requirements
					</h3>

					<ul>
						<li>Avoid patterns, consecutive letters (either alphabetical or on the keyboard) and numbers</li>
						<li>Avoid replacing letters with similar numbers or symbols (example 3 for e or $ for s)</li>
						<li>Avoid short passwords.</li>
						<li>Do use a password manager to generate long/random passwords</li>
						<li>Do use lots of ‘parts’ to your password, which can make it hard to crack and easier to remember. Four unrelated english words is very strong (correcthorsebatterystaple), as is a combination of words and random numbers (tape934elephant%*)</li>
					</ul>

				</div>

			</div>

			<img src="/img/support-portal.png" alt="" class="support__portal-img">

		</div>

	</div>

	<div class="support__versions">

		<h2>
			Operating Systems & Supported Product Versions
		</h2>

		<div class="support__versions__container">

			<div class="tab">
				<button id="defaultOpen" class="tablinks" onclick="openCity(event, 'Openviz')">Openviz</button>
				<button class="tablinks" onclick="openCity(event, 'Express')">AVS/Express</button>
				<button class="tablinks" onclick="openCity(event, 'Toolmaster')">Toolmaster/Gsharp</button>
				<button class="tablinks" onclick="openCity(event, 'AVS5')">AVS5</button>
			</div>

			<div id="Openviz" class="tabcontent">
				<div class="support__version-number">
				<h4 data-plugin="expand">
					Version 3.2 – Alpha
				</h4>
				</div>
				<div class="hidden">
					<strong>.NET</strong><br/>
					Development: Visual Studio 2010+<br/>
					Deployment: Windows
					<br/><br/>
					<strong>Java</strong><br/>
					Any machine with a Sun Java Virtual Machine (Version 1.4 or higher)<br/>
					OpenViz supports OpenGL Hardware Acceleration using JOGL.<br/>
					Supported platforms include:<br/>
					Windows, Linux i586 & AMD64, Mac OS X Universal, Solaris SPARC
					<br/><br/>
					OpenViz is shipped with JOGL JSR231 Release 1.1.1-final version of JOGL
				</div>
				<div class="support__version-number">
				<h4 data-plugin="expand">
					Version 3.1
				</h4>
				</div>
				<div class="hidden">
					<strong>.NET</strong><br/>
					Development: Visual Studio 2010+<br/>
					Deployment: Windows
					<br/><br/>
					<strong>Java</strong><br/>
					Any machine with a Sun Java Virtual Machine (Version 1.4 or higher)<br/>
					OpenViz supports OpenGL Hardware Acceleration using JOGL.<br/>
					Supported platforms include:<br/>
					Windows, Linux i586 & AMD64, Mac OS X Universal, Solaris SPARC
					<br/><br/>
					OpenViz is shipped with JOGL JSR231 Release 1.1.1-final version of JOGL
					<br/><br/>
					<strong>COM</strong><br/>
					Development: Visual Studio 2010+<br/>
					Deployment: Windows
				</div>
				<div class="support__version-number">
				<h4 data-plugin="expand">
					Version 3.0 - Version 2.10.2
				</h4>
				</div>
				<div class="hidden">
					<strong>COM / .NET Interops</strong><br/>
					Development: Visual Studio 2010+<br/>
					Deployment: Windows
					<br/><br/>
					<strong>Java</strong><br/>
					Any machine with a Sun Java Virtual Machine (Version 1.4 or higher)<br/>
					OpenViz supports OpenGL Hardware Acceleration using JOGL.<br/>
					Supported platforms include:<br/>
					Windows, Linux i586 & AMD64, Mac OS X Universal, Solaris SPARC
					<br/><br/>
					OpenViz is shipped with JOGL JSR231 Release 1.1.1-final version of JOGL
				</div>
			</div>

			<div id="Express" class="tabcontent">
				<h4>Supported Versions</h4>
				Versions: 8.4, 8.3, 8.2
				<br/><br/>
				<h4>Latest Version: 8.4</h4>
				<div class="support__version-number">
				<h4 data-plugin="expand">
					Developer & Visualization Editions
				</h4>
				</div>
				<div class="hidden">

					<strong>Windows</strong><br/>
					<table>
					<tbody>
					<tr>
					<td>Hardware</td>
					<td>Operating System</td>
					<td>Graphics Library</td>
					<td>Compilers</td>
					<td>Database</td>
					</tr>
					<tr>
					<td>Intel x86</td>
					<td>Windows 7, 8, 8.1, 10</td>
					<td>OpenGL</td>
					<td>Visual Studio 2015, 2017<br>
					Intel Fortran 16.0</td>
					<td>Oracle 10.2<br>
					ODBC 2.0</td>
					</tr>
					<tr>
					<td>AMD64 / Intel 64</td>
					<td>Windows 7, 8, 8.1, 10</td>
					<td>OpenGL</td>
					<td>Visual Studio 2015, 2017<br>
					Intel Fortran 16.0</td>
					<td>Oracle 10.2<br>
					ODBC 2.0</td>
					</tr>
					</tbody>
					</table>
					<br/><br/>

					<strong>OSX</strong><br/>
					<table>
					<tbody>
					<tr>
					<td>Hardware</td>
					<td>Operating System</td>
					<td>Motif</td>
					<td>Graphics Library</td>
					<td>Compilers</td>
					<td>Database</td>
					</tr>
					<tr>
					<td>Intel x86</td>
					<td>Mac OS X 10.9, 10.10, 10.11, 10.12</td>
					<td>2.3 (Fink)</td>
					<td>OpenGL</td>
					<td>Xcode 6.2<br>
					gfortran 5.2 (Fink)</td>
					<td>N/A</td>
					</tr>
					</tbody>
					</table>
					<br/><br/>

					<strong>Linux</strong><br/>
					<table>
					<tbody>
					<tr>
					<td>Hardware</td>
					<td>Operating System</td>
					<td>Motif</td>
					<td>Graphics Library</td>
					<td>Compilers</td>
					<td>Database</td>
					</tr>
					<tr>
					<td>Intel x86</td>
					<td>Red Hat EL6</td>
					<td>2.3</td>
					<td>OpenGL/Mesa 9.2</td>
					<td>gcc 4.4<br>
					gfortran 4.4</td>
					<td>Oracle 10.2</td>
					</tr>
					<tr>
					<td>AMD64 / Intel 64</td>
					<td>Red Hat EL7</td>
					<td>2.3</td>
					<td>OpenGL/Mesa 9.2.5</td>
					<td>gcc 4.8<br>
					gfortran 4.8</td>
					<td>Oracle 10.2</td>
					</tr>
					<tr>
					<td>AMD64 / Intel 64</td>
					<td>Red Hat EL6</td>
					<td>2.3</td>
					<td>OpenGL/Mesa 9.2</td>
					<td>gcc 4.4<br>
					gfortran 4.4</td>
					<td>Oracle 10.2</td>
					</tr>
					</tbody>
					</table>

				</div>
				<div class="support__version-number">
				<h4 data-plugin="expand">
					Multipipe Edition
				</h4>
				</div>
				<div class="hidden">

					<strong>Windows</strong><br/>
					<table>
					<tbody>
					<tr>
					<td>Hardware</td>
					<td>Operating System</td>
					<td>MPU Library(s)</td>
					<td>MPI Library</td>
					<td>Compilers</td>
					<td>Database</td>
					</tr>
					<tr>
					<td>Intel x86</td>
					<td>Windows 7, 8, 8.1, 10</td>
					<td>CAVELib 3.3, DDR(GL) &amp; DDR(OSMesa)</td>
					<td>Microsoft MPI</td>
					<td>Visual Studio 2015, 2017<br>
					Intel Fortran 16.0</td>
					<td>Oracle 10.2<br>
					ODBC 2.0</td>
					</tr>
					<tr>
					<td>AMD64 / Intel 64</td>
					<td>Windows 7, 8, 8.1, 10</td>
					<td>CAVELib 3.3, DDR(GL) &amp; DDR(OSMesa)</td>
					<td>Microsoft MPI</td>
					<td>Visual Studio 2015, 2017<br>
					Intel Fortran 16.0</td>
					<td>Oracle 10.2<br>
					ODBC 2.0</td>
					</tr>
					</tbody>
					</table>
					<br/><br/>

					<strong>OSX</strong><br/>
					Platform Not Supported
					<br/><br/>

					<strong>Linux</strong><br/>
					<table>
					<tbody>
					<tr>
					<td>Hardware</td>
					<td>Operating System</td>
					<td>MPU Library(s)</td>
					<td>MPI Library</td>
					<td>Compilers</td>
					<td>Database</td>
					</tr>
					<tr>
					<td>Intel x86</td>
					<td>Red Hat EL6</td>
					<td>CAVELib 3.3, DDR(GL) &amp; DDR(OSMesa)</td>
					<td>MPICH2 1.4.1p1</td>
					<td>gcc 4.4<br>
					gfortran 4.4</td>
					<td>Oracle 10.2</td>
					</tr>
					<tr>
					<td>AMD64 / Intel 64</td>
					<td>Red Hat EL7</td>
					<td>CAVELib 3.3, DDR(GL) &amp; DDR(OSMesa)</td>
					<td>MPICH2 1.4.1p1</td>
					<td>gcc 4.8<br>
					gfortran 4.8</td>
					<td>Oracle 10.2</td>
					</tr>
					<tr>
					<td>AMD64 / Intel 64</td>
					<td>Red Hat EL6</td>
					<td>CAVELib 3.3, DDR(GL) &amp; DDR(OSMesa)</td>
					<td>MPICH2 1.4.1p1</td>
					<td>gcc 4.4<br>
					gfortran 4.4</td>
					<td>Oracle 10.2</td>
					</tr>
					</tbody>
					</table>

				</div>
				<div class="support__version-number">
				<h4 data-plugin="expand">
					Parallel Edition
				</h4>
				</div>
				<div class="hidden">

					<strong>Windows</strong><br/>
					<table>
					<tbody>
					<tr>
					<td>Hardware</td>
					<td>Operating System</td>
					<td>MPI Library</td>
					<td>Compilers</td>
					<td>Database</td>
					</tr>
					<tr>
					<td>Intel x86</td>
					<td>Windows 7, 8, 8.1, 10</td>
					<td>Microsoft MPI</td>
					<td>Visual Studio 2015, 2017<br>
					Intel Fortran 16.0</td>
					<td>Oracle 10.2<br>
					ODBC 2.0</td>
					</tr>
					<tr>
					<td>AMD64 / Intel 64</td>
					<td>Windows Vista,7,8 x64</td>
					<td>Microsoft MPI</td>
					<td>Visual Studio 2015, 2017<br>
					Intel Fortran 16.0</td>
					<td>Oracle 10.2<br>
					ODBC 2.0</td>
					</tr>
					</tbody>
					</table>
					<br/><br/>

					<strong>OSX</strong><br/>
					Platform Not Supported
					<br/><br/>

					<strong>Linux</strong><br/>
					<table>
					<tbody>
					<tr>
					<td>Hardware</td>
					<td>Operating System</td>
					<td>MPI Library</td>
					<td>Compilers</td>
					<td>Database</td>
					</tr>
					<tr>
					<td>Intel x86</td>
					<td>Red Hat EL6</td>
					<td>MPICH2 1.4.1p1</td>
					<td>gcc 4.4<br>
					gfortran 4.4</td>
					<td>Oracle 10.2</td>
					</tr>
					<tr>
					<td>AMD64 / Intel 64</td>
					<td>Red Hat EL7</td>
					<td>MPICH2 1.4.1p1</td>
					<td>gcc 4.8<br>
					gfortran 4.8</td>
					<td>Oracle 10.2</td>
					</tr>
					<tr>
					<td>AMD64 / Intel 64</td>
					<td>Red Hat EL6</td>
					<td>MPICH2 1.4.1p1</td>
					<td>gcc 4.4<br>
					gfortran 4.4</td>
					<td>Oracle 10.2</td>
					</tr>
					</tbody>
					</table>

				</div>

			</div>

			<div id="Toolmaster" class="tabcontent">
				<h4>Supported Versions:</h4>
				Versions: 8.1, 8.0, 7.5.4 & 3.5.4
				<br/><br/>
				Latest Version: 8.1
				<br/><br/>
				<table>
					<tbody>
					<tr>
					<td>Platform</td>
					<td>Addressing</td>
					<td>Operating System</td>
					<td>X11</td>
					<td>Motif</td>
					<td>ANSI C</td>
					<td>FORTRAN</td>
					</tr>
					<tr>
					<td>x86 PC</td>
					<td>32</td>
					<td>Windows Vista,7, 8, 8.1, 10</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Visual Studio 2015</td>
					<td>Intel 16.0</td>
					</tr>
					<tr>
					<td>x86-64 PC</td>
					<td>64</td>
					<td>Windows Vista,7, 8, 8.1, 10 x64</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Visual Studio 2015</td>
					<td>Intel 16.0</td>
					</tr>
					<tr>
					<td>x86 PC</td>
					<td>32</td>
					<td>Red Hat Linux EL 6</td>
					<td>R7</td>
					<td>2.3</td>
					<td>gcc 4.4</td>
					<td>gfortran 4.4</td>
					</tr>
					<tr>
					<td>x86-64 PC</td>
					<td>64</td>
					<td>Red Hat Linux EL 7</td>
					<td>R7</td>
					<td>2.3</td>
					<td>gcc 4.8</td>
					<td>gfortran 4.8</td>
					</tr>
					<tr>
					<td>Mac</td>
					<td>64</td>
					<td>Mac OS X 10.9, 10.10, 10.11</td>
					<td>R6</td>
					<td>2.3</td>
					<td>gcc 4.2 (Xcode)</td>
					<td>gfortran 5.2 (Fink)</td>
					</tr>
					</tbody>
				</table>
			</div>

			<div id="AVS5" class="tabcontent">
				<h4>Supported Versions:</h4>
				Versions: 5.8
				<br/><br/>
				Latest Version: 5.8
				<br/><br/>
				<h4>Linux</h4>
				<table>
				<tbody>
				<tr>
				<td>Operating System</td>
				<td>Graphics Library</td>
				<td>Compilers</td>
				</tr>
				<tr>
				<td>RHEL5 i686</td>
				<td>AVS is dynamically linked to the Mesa OpenGL libraries provided with<br>
				RHEL5</td>
				<td>C/C++ gcc (4.1)<br>
				Fortran gfortran (4.1)</td>
				</tr>
				<tr>
				<td>RHEL5 x86_64</td>
				<td>AVS is dynamically linked to the Mesa OpenGL libraries provided with<br>
				RHEL5</td>
				<td>C/C++ gcc (4.1)<br>
				Fortran gfortran (4.1)</td>
				<td></td>
				</tr>
				</tbody>
				</table>
				<br/><br/>
				<h4>OSX</h4>
				<table>
				<tbody>
				<tr>
				<td>Operating System</td>
				<td>Graphics Library</td>
				<td>Compilers</td>
				</tr>
				<tr>
				<td width="185">Intel-based, Mac OS X 10.6</td>
				<td>OpenGL libraries provided with the X11 server</td>
				<td>C/C++ gcc (4.2)<br>
				Fortran gfortran (4.4)</td>
				</tr>
				</tbody>
				</table>
			</div>

		</div>

	</div>

</div>

<script>
function openCity(evt, cityName) {
	// Declare all variables
	var i, tabcontent, tablinks;

	// Get all elements with class="tabcontent" and hide them
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	// Get all elements with class="tablinks" and remove the class "active"
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}

	// Show the current tab, and add an "active" class to the button that opened the tab
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
}
// show openviz
document.getElementById("defaultOpen").click();
</script>
