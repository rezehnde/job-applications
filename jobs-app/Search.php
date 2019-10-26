<?php
require __DIR__ . '/lib/Model/Company.php';
require __DIR__ . '/lib/Service/CompanyLoader.php';
require __DIR__ . '/lib/Service/SearchManager.php';

$companyLoader = new CompanyLoader();

$searchManager = new SearchManager();

$personBadges = array( 'bike', 'drivers_licence' );

$companies = $companyLoader->getCompanies();

$approvedCompanies = $searchManager->searchCompanies($personBadges, $companies);

var_dump($approvedCompanies);
