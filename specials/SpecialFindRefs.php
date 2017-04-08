<?php
/**
 * FindRefs extension page
 *
 * @file
 * @ingroup Extensions
 */

class SpecialFindRefs extends SpecialPage {
	public function __construct() {
		parent::__construct( 'FindRefs' );
	}

	public function execute( $sub ) {
		$out = $this->getOutput();

		$out->setPageTitle( 'FindRefs' );

		$out->addHelpLink( 'How to become a MediaWiki hacker' );

		$out->addWikiMsg( 'findrefs-intro' );

		$form = "Enter the search string: <form><input type=text name='ques' ></form>";

		$out->addHTML($form);

		$sstring = (string)urlencode($_GET["ques"]);

		if($sstring){
			$gsearch = "<a href=https://www.google.com/search?q=$sstring>Google Search</a><br>";
			$gbooks = "<a href=https://www.google.com/search?tbm=bks&q=$sstring>Google Books</a><br> ";
			$gscholar = "<a href=https://scholar.google.co.in/scholar?&q=$sstring>Google Scholar</a><br>";
			$youtube = "<a href=https://www.youtube.com/results?search_query=$sstring>Youtube</a><br>";
			$highbeam = "<a href=https://www.highbeam.com/Search?searchTerm=$sstring>HighBeam Research</a><br>";
			$wolfram = "<a href=https://www.wolframalpha.com/input/?i=$sstring>Wolfram Alpha</a><br>";
			$opendata = "<a href=https://data.gov.in/search/site/$sstring>Open Data (Govt of India)</a><br>";
			$sciencemag = "<a href=http://search.sciencemag.org/?q=$sstring>Science Mag (General)</a><br>";
			$sciencemagadv = "<a href=http://search.sciencemag.org/?q=$sstring>Science Mag (Advanced)</a><br>";
			$livescience = "<a href=http://www.livescience.com/search?q=$sstring></a><br>";
			$smithsonian = "<a href=http://www.smithsonianmag.com/search/?q=$sstring>Smithsonian Magazine</a><br>";
			$popsci = "<a href=http://www.popsci.com/find/$sstring>Popular Science</a><br>";
			$nature = "<a href=http://www.nature.com/search?q=$sstring>Nature Mag</a><br>";
			$space = "<a href=http://www.space.com/search?q=$sstring>Space Mag</a><br>";
			$scieneddaily = "<a href=https://www.sciencedaily.com/search/?keyword=$sstring>Science Daily</a><br>";
			$nasa = "<a href=https://nasasearch.nasa.gov/search?query=$sstring&affiliate=nasa&utf8=%E2%9C%93>NASA</a><br>";
			$out->addHTML($gsearch);
			$out->addHTML($gbooks);
			$out->addHTML($gscholar);
			$out->addHTML($youtube);
			$out->addHTML($highbeam);
			$out->addHTML($wolfram);
			$out->addHTML($opendata);
			$out->addHTML($sciencemag);
			$out->addHTML($sciencemagadv);
			$out->addHTML($livescience);
			$out->addHTML($smithsonian);
			$out->addHTML($popsci);
			$out->addHTML($nature);
			$out->addHTML($space);
			$out->addHTML($nasa);
		}
	
	}


}
