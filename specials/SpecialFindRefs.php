<?php
/**
 * HelloWorld SpecialPage for BoilerPlate extension
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

		$form = "Enter the search string: <form><input type=text name=ques ></form>";

		$out->addHTML($form);

		$sstring = $_GET["ques"];

		if($sstring){
			$books = "<a href=https://www.google.com/search?tbm=bks&q=$sstring>Google Books</a> ";
			$out->addHTML($books);
		}
	
	}


}
