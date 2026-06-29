<?php
/**
 * ============================================
 * ANNUAIRE-PISCINISTE.PRO - CONFIGURATION
 * ============================================
 */

define('SITE_NAME', 'trouver-devis-piscine.fr');
define('SITE_DOMAIN', 'trouver-devis-piscine.fr');
define('SITE_URL', 'https://trouver-devis-piscine.fr');
define('SITE_EMAIL', 'admin@miraubolant.com');
define('SITE_TAGLINE', "Pisciniste et Construction Partout en France");
define('SITE_DESCRIPTION', "Trouvez un pisciniste professionnel pour la construction ou la rÃ©novation de votre piscine.");

define('SITE_LOGO_TEXT', 'TROUVER-DEVIS-PISCINE');
define('SITE_LOGO_TLD', '.PRO');

define('METIER', "pisciniste");
define('METIER_PLURAL', "piscinistes");
define('METIER_TITLE', "Pisciniste");
define('METIER_ICON', "droplet");

define('VUD_PARTENAIRE_ID', '2372');
define('VUD_CATEGORIE_ID', '44');
define('VUD_IFRAME_URL', 'https://www.viteundevis.com/widget/devis.php');

define('SCRAPE_QUERY', "pisciniste construction entretien");
define('SCRAPE_API_KEY', '[CLE_API_SEMSCRAPER]');

define('ITEMS_PER_PAGE', 24);
define('NEARBY_CITIES_COUNT', 100);
define('NEARBY_DEPARTMENTS_COUNT', 6);
define('ARTISANS_PER_PAGE', 15);

define('DATA_PATH', __DIR__ . '/data/');
define('REGIONS_FILE', DATA_PATH . 'regions/regions.json');

define('MODELES', [
    ['slug' => 'piscine-coque', 'nom' => 'Piscine Coque', 'emoji' => "ðŸŠ", 'vud_cat' => '44'],
    ['slug' => 'piscine-beton', 'nom' => 'Piscine BÃ©ton', 'emoji' => "ðŸ–ï¸", 'vud_cat' => '44'],
    ['slug' => 'entretien-piscine', 'nom' => 'Entretien & RÃ©novation', 'emoji' => "ðŸ§¹", 'vud_cat' => '44'],
    ['slug' => 'piscine-bois', 'nom' => 'Piscine Bois', 'emoji' => "ðŸªµ", 'vud_cat' => '44'],
    ['slug' => 'piscine-hors-sol', 'nom' => 'Piscine Hors Sol', 'emoji' => "ðŸªœ", 'vud_cat' => '44'],
    ['slug' => 'piscine-enterree', 'nom' => 'Piscine EnterrÃ©e', 'emoji' => "ðŸ•³ï¸", 'vud_cat' => '44'],
    ['slug' => 'piscine-semi-enterree', 'nom' => 'Piscine Semi-EnterrÃ©e', 'emoji' => "ðŸ§±", 'vud_cat' => '44'],
    ['slug' => 'piscine-interieure', 'nom' => 'Piscine IntÃ©rieure', 'emoji' => "ðŸ ", 'vud_cat' => '44'],
    ['slug' => 'piscine-debordement', 'nom' => 'Piscine Ã  DÃ©bordement', 'emoji' => "ðŸŒŠ", 'vud_cat' => '44'],
    ['slug' => 'piscine-miroir', 'nom' => 'Piscine Miroir', 'emoji' => "ðŸªž", 'vud_cat' => '44'],
    ['slug' => 'filtration-piscine', 'nom' => 'SystÃ¨me de Filtration', 'emoji' => "ðŸ’§", 'vud_cat' => '44'],
    ['slug' => 'pompe-chaleur-piscine', 'nom' => 'Pompe Ã  Chaleur', 'emoji' => "ðŸŒ¡ï¸", 'vud_cat' => '44'],
    ['slug' => 'volet-roulant-piscine', 'nom' => 'Volet Roulant', 'emoji' => "ðŸ›¡ï¸", 'vud_cat' => '44'],
    ['slug' => 'bache-piscine', 'nom' => 'BÃ¢che de Piscine', 'emoji' => "ðŸŽª", 'vud_cat' => '44'],
    ['slug' => 'abri-piscine', 'nom' => 'Abri de Piscine', 'emoji' => "ðŸ›–", 'vud_cat' => '44'],
    ['slug' => 'domotique-piscine', 'nom' => 'Domotique Piscine', 'emoji' => "ðŸ“±", 'vud_cat' => '44'],
    ['slug' => 'liner-piscine', 'nom' => 'Pose de Liner', 'emoji' => "ðŸ“", 'vud_cat' => '44'],
    ['slug' => 'carrelage-piscine', 'nom' => 'Carrelage Piscine', 'emoji' => "ðŸ§Š", 'vud_cat' => '44'],
    ['slug' => 'enduit-piscine', 'nom' => 'Enduit Piscine', 'emoji' => "ðŸ–Œï¸", 'vud_cat' => '44'],
    ['slug' => 'nettoyage-piscine', 'nom' => 'Nettoyage Piscine', 'emoji' => "ðŸ¤–", 'vud_cat' => '44'],
    ['slug' => 'hivernage-piscine', 'nom' => 'Hivernage', 'emoji' => "â„ï¸", 'vud_cat' => '44'],
    ['slug' => 'remise-en-route-piscine', 'nom' => 'Remise en Route', 'emoji' => "â˜€ï¸", 'vud_cat' => '44'],
    ['slug' => 'recherche-fuite-piscine', 'nom' => 'Recherche de Fuite', 'emoji' => "ðŸ”", 'vud_cat' => '44'],
    ['slug' => 'traitement-eau', 'nom' => 'Traitement de l\'Eau', 'emoji' => "ðŸ§ª", 'vud_cat' => '44'],
    ['slug' => 'piscine-naturelle', 'nom' => 'Piscine Naturelle', 'emoji' => "ðŸŒ¿", 'vud_cat' => '44'],
    ['slug' => 'spa-jacuzzi', 'nom' => 'Spa & Jacuzzi', 'emoji' => "ðŸ›", 'vud_cat' => '44'],
    ['slug' => 'couloir-nage', 'nom' => 'Couloir de Nage', 'emoji' => "ðŸŠâ€â™‚ï¸", 'vud_cat' => '44'],
    ['slug' => 'piscine-kit', 'nom' => 'Piscine en Kit', 'emoji' => "ðŸ“¦", 'vud_cat' => '44'],
    ['slug' => 'plage-piscine', 'nom' => 'Plage de Piscine', 'emoji' => "ðŸŒ´", 'vud_cat' => '44'],
    ['slug' => 'renovation-piscine', 'nom' => 'RÃ©novation ComplÃ¨te', 'emoji' => "âœ¨", 'vud_cat' => '44'],
]);

define('STYLES', [
    ['slug' => 'piscine-coque', 'nom' => 'Piscine Coque', 'emoji' => "ðŸŠ", 'desc' => 'Installation rapide, formes variÃ©es'],
    ['slug' => 'piscine-beton', 'nom' => 'Piscine BÃ©ton', 'emoji' => "ðŸ–ï¸", 'desc' => 'Sur mesure et trÃ¨s rÃ©sistant'],
    ['slug' => 'entretien-piscine', 'nom' => 'Entretien & RÃ©novation', 'emoji' => "ðŸ§¹", 'desc' => 'Maintenance rÃ©guliÃ¨re et ponctuelle'],
    ['slug' => 'piscine-bois', 'nom' => 'Piscine Bois', 'emoji' => "ðŸªµ", 'desc' => 'Aspect naturel et chaleureux'],
    ['slug' => 'piscine-hors-sol', 'nom' => 'Piscine Hors Sol', 'emoji' => "ðŸªœ", 'desc' => 'Sans terrassement, montage simple'],
    ['slug' => 'piscine-enterree', 'nom' => 'Piscine EnterrÃ©e', 'emoji' => "ðŸ•³ï¸", 'desc' => 'Bassin classique intÃ©grÃ© au sol'],
    ['slug' => 'piscine-semi-enterree', 'nom' => 'Piscine Semi-EnterrÃ©e', 'emoji' => "ðŸ§±", 'desc' => 'IdÃ©ale pour les terrains en pente'],
    ['slug' => 'piscine-interieure', 'nom' => 'Piscine IntÃ©rieure', 'emoji' => "ðŸ ", 'desc' => 'Baignade toute l\'annÃ©e'],
    ['slug' => 'piscine-debordement', 'nom' => 'Piscine Ã  DÃ©bordement', 'emoji' => "ðŸŒŠ", 'desc' => 'Effet visuel spectaculaire'],
    ['slug' => 'piscine-miroir', 'nom' => 'Piscine Miroir', 'emoji' => "ðŸªž", 'desc' => 'L\'eau au niveau des margelles'],
    ['slug' => 'filtration-piscine', 'nom' => 'SystÃ¨me de Filtration', 'emoji' => "ðŸ’§", 'desc' => 'Pompe, filtre Ã  sable ou cartouche'],
    ['slug' => 'pompe-chaleur-piscine', 'nom' => 'Pompe Ã  Chaleur', 'emoji' => "ðŸŒ¡ï¸", 'desc' => 'Chauffage de l\'eau Ã©conomique'],
    ['slug' => 'volet-roulant-piscine', 'nom' => 'Volet Roulant', 'emoji' => "ðŸ›¡ï¸", 'desc' => 'SÃ©curitÃ© et maintien de la tempÃ©rature'],
    ['slug' => 'bache-piscine', 'nom' => 'BÃ¢che de Piscine', 'emoji' => "ðŸŽª", 'desc' => 'Couverture d\'Ã©tÃ© ou d\'hiver'],
    ['slug' => 'abri-piscine', 'nom' => 'Abri de Piscine', 'emoji' => "ðŸ›–", 'desc' => 'Protection et chauffage naturel'],
    ['slug' => 'domotique-piscine', 'nom' => 'Domotique Piscine', 'emoji' => "ðŸ“±", 'desc' => 'ContrÃ´le Ã  distance (pompe, Ã©clairage)'],
    ['slug' => 'liner-piscine', 'nom' => 'Pose de Liner', 'emoji' => "ðŸ“", 'desc' => 'RevÃªtement Ã©tanche PVC'],
    ['slug' => 'carrelage-piscine', 'nom' => 'Carrelage Piscine', 'emoji' => "ðŸ§Š", 'desc' => 'RevÃªtement durable et luxueux'],
    ['slug' => 'enduit-piscine', 'nom' => 'Enduit Piscine', 'emoji' => "ðŸ–Œï¸", 'desc' => 'Finition pour piscine bÃ©ton'],
    ['slug' => 'nettoyage-piscine', 'nom' => 'Nettoyage Piscine', 'emoji' => "ðŸ¤–", 'desc' => 'Robots et nettoyage manuel'],
    ['slug' => 'hivernage-piscine', 'nom' => 'Hivernage', 'emoji' => "â„ï¸", 'desc' => 'Mise au repos du bassin'],
    ['slug' => 'remise-en-route-piscine', 'nom' => 'Remise en Route', 'emoji' => "â˜€ï¸", 'desc' => 'PrÃ©paration pour la saison estivale'],
    ['slug' => 'recherche-fuite-piscine', 'nom' => 'Recherche de Fuite', 'emoji' => "ðŸ”", 'desc' => 'DÃ©tection prÃ©cise sans casse'],
    ['slug' => 'traitement-eau', 'nom' => 'Traitement de l\'Eau', 'emoji' => "ðŸ§ª", 'desc' => 'Chlore, brome, sel, UV'],
    ['slug' => 'piscine-naturelle', 'nom' => 'Piscine Naturelle', 'emoji' => "ðŸŒ¿", 'desc' => 'Filtration par les plantes'],
    ['slug' => 'spa-jacuzzi', 'nom' => 'Spa & Jacuzzi', 'emoji' => "ðŸ›", 'desc' => 'Bassin Ã  remous relaxant'],
    ['slug' => 'couloir-nage', 'nom' => 'Couloir de Nage', 'emoji' => "ðŸŠâ€â™‚ï¸", 'desc' => 'Bassin long et Ã©troit pour sportifs'],
    ['slug' => 'piscine-kit', 'nom' => 'Piscine en Kit', 'emoji' => "ðŸ“¦", 'desc' => 'Montage par le client ou assistÃ©'],
    ['slug' => 'plage-piscine', 'nom' => 'Plage de Piscine', 'emoji' => "ðŸŒ´", 'desc' => 'AmÃ©nagement autour du bassin'],
    ['slug' => 'renovation-piscine', 'nom' => 'RÃ©novation ComplÃ¨te', 'emoji' => "âœ¨", 'desc' => 'Refonte esthÃ©tique et technique'],
]);

define('SERVICES', [
    [
        'titre' => "Construction & Installation",
        'icon' => "ðŸš§",
        'desc' => "Conception sur mesure ou installation de piscines coque, bÃ©ton, ou bois adaptÃ©es Ã  votre terrain et votre budget.",
        'points' => ["Ã‰tude de faisabilitÃ© et terrassement", "Accompagnement dÃ©marches (PLU)", "Garantie dÃ©cennale constructeur"]
    ],
    [
        'titre' => "Entretien & Ã‰quipements",
        'icon' => "âš™ï¸",
        'desc' => "Maintien de la qualitÃ© de votre eau et installation d'accessoires (pompes Ã  chaleur, volets, abris).",
        'points' => ["Contrats d'entretien annuel", "Hivernage et remise en route", "Installation de chauffage"]
    ],
    [
        'titre' => "RÃ©novation & Ã‰tanchÃ©itÃ©",
        'icon' => "âœ¨",
        'desc' => "Modernisation de bassins vieillissants : changement de liner, dÃ©tection de fuites et rÃ©fection des plages.",
        'points' => ["Remplacement de liner ou carrelage", "Modification des escaliers/plages", "Mise aux normes de sÃ©curitÃ©"]
    ],
]);

define('FAQ_ACCUEIL', [
    [
        'question' => "Faut-il un permis de construire pour une piscine ?",
        'reponse' => "Une dÃ©claration prÃ©alable de travaux suffit pour une piscine dont le bassin fait entre 10 et 100 mÂ² (sans abri ou avec un abri infÃ©rieur Ã  1,80m de haut). Au-delÃ  de 100 mÂ², un permis de construire est exigÃ©. Les piscines hors sol installÃ©es moins de 3 mois dans l'annÃ©e (et de moins de 10 mÂ²) sont dispensÃ©es d'autorisation, sauf secteurs protÃ©gÃ©s."
    ],
    [
        'question' => "Quelle est la diffÃ©rence entre une piscine coque et une piscine bÃ©ton ?",
        'reponse' => "La piscine coque (en polyester) est fabriquÃ©e en usine et livrÃ©e d'un bloc. Son installation est trÃ¨s rapide (quelques jours) et son fond est trÃ¨s lisse. La piscine en bÃ©ton est coulÃ©e ou maÃ§onnÃ©e sur place : sa construction est plus longue mais elle permet le vrai 'sur-mesure' (formes, tailles, profondeur) et offre une soliditÃ© incomparable sur la durÃ©e."
    ],
    [
        'question' => "Quelles sont les obligations lÃ©gales de sÃ©curitÃ© ?",
        'reponse' => "En France, toute piscine enterrÃ©e non close privative Ã  usage individuel doit Ãªtre Ã©quipÃ©e au moins d'un des quatre dispositifs de sÃ©curitÃ© homologuÃ©s : une alarme (immersion ou pÃ©rimÃ©trique), une barriÃ¨re de protection, une couverture de sÃ©curitÃ© (bÃ¢che Ã  barre, volet) ou un abri de piscine."
    ],
    [
        'question' => "Combien de temps faut-il pour crÃ©er une piscine enterrÃ©e ?",
        'reponse' => "Pour une piscine coque, l'installation prend en gÃ©nÃ©ral 1 Ã  2 semaines (terrassement compris). Pour une piscine bÃ©ton traditionnelle, comptez entre 4 et 8 semaines de travaux en fonction des finitions (liner, carrelage) et de la mÃ©tÃ©o."
    ],
    [
        'question' => "Quel est le budget moyen pour une piscine creusÃ©e ?",
        'reponse' => "Le prix varie Ã©normÃ©ment selon le type : Ã  partir de 15 000 â‚¬ pour une piscine coque standard prÃªte Ã  plonger, et souvent entre 25 000 â‚¬ et 40 000 â‚¬ pour une piscine maÃ§onnÃ©e en bÃ©ton. N'oubliez pas d'inclure le coÃ»t de la filtration, des dispositifs de sÃ©curitÃ© et des terrasses."
    ]
]);

define('TOP_VILLES', [
    ['nom' => 'Paris', 'slug' => 'paris', 'cp' => '75000', 'region' => 'ile-de-france', 'dept' => 'paris'],
    ['nom' => 'Marseille', 'slug' => 'marseille', 'cp' => '13000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'bouches-du-rhone'],
    ['nom' => 'Lyon', 'slug' => 'lyon', 'cp' => '69000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'rhone'],
    ['nom' => 'Toulouse', 'slug' => 'toulouse', 'cp' => '31100', 'region' => 'occitanie', 'dept' => 'haute-garonne'],
    ['nom' => 'Nice', 'slug' => 'nice', 'cp' => '06000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'alpes-maritimes'],
    ['nom' => 'Nantes', 'slug' => 'nantes', 'cp' => '44200', 'region' => 'pays-de-la-loire', 'dept' => 'loire-atlantique'],
    ['nom' => 'Montpellier', 'slug' => 'montpellier', 'cp' => '34080', 'region' => 'occitanie', 'dept' => 'herault'],
    ['nom' => 'Bordeaux', 'slug' => 'bordeaux', 'cp' => '33300', 'region' => 'nouvelle-aquitaine', 'dept' => 'gironde'],
    ['nom' => 'Lille', 'slug' => 'lille', 'cp' => '59260', 'region' => 'hauts-de-france', 'dept' => 'nord'],
    ['nom' => 'Strasbourg', 'slug' => 'strasbourg', 'cp' => '67000', 'region' => 'grand-est', 'dept' => 'bas-rhin'],
    ['nom' => 'Rennes', 'slug' => 'rennes', 'cp' => '35700', 'region' => 'bretagne', 'dept' => 'ille-et-vilaine'],
    ['nom' => 'Toulon', 'slug' => 'toulon', 'cp' => '83000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'var'],
    ['nom' => 'Grenoble', 'slug' => 'grenoble', 'cp' => '38000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'isere'],
    ['nom' => 'Dijon', 'slug' => 'dijon', 'cp' => '21000', 'region' => 'bourgogne-franche-comte', 'dept' => 'cote-d-or'],
    ['nom' => 'Angers', 'slug' => 'angers', 'cp' => '49000', 'region' => 'pays-de-la-loire', 'dept' => 'maine-et-loire'],
    ['nom' => 'Nimes', 'slug' => 'nimes', 'cp' => '30000', 'region' => 'occitanie', 'dept' => 'gard'],
    ['nom' => 'Clermont-Ferrand', 'slug' => 'clermont-ferrand', 'cp' => '63000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'puy-de-dome'],
    ['nom' => 'Le Havre', 'slug' => 'le-havre', 'cp' => '76600', 'region' => 'normandie', 'dept' => 'seine-maritime'],
]);

define('AVANTAGES', [
    ['titre' => 'RÃ©seau National', 'desc' => 'Des milliers de professionnels rÃ©fÃ©rencÃ©s dans toute la France.', 'icon' => "ðŸ—ºï¸"],
    ['titre' => 'Partenaires ExpÃ©rimentÃ©s', 'desc' => 'Trouvez le bon interlocuteur pour la rÃ©ussite de votre projet', 'icon' => "âœ…"],
    ['titre' => 'Mise en Relation Rapide', 'desc' => 'Obtenez gratuitement des devis adaptÃ©s Ã  vos besoins.', 'icon' => "ðŸ’°"],
]);

define('HERO_IMAGE', 'https://images.unsplash.com/photo-1572331165267-854da2b10ccc?w=1920&q=80&auto=format&fit=crop');
define('MODELE_IMAGE', 'https://images.unsplash.com/photo-1543326727-cf6866f281ce?w=1920&q=80&auto=format&fit=crop');


function getModeleBySlug($slug)
{
    foreach (MODELES as $modele) {
        if ($modele['slug'] === $slug) {
            return $modele;
        }
    }
    return null;
}

function getAllModeles()
{
    return MODELES;
}

function getVudUrl($modele = null)
{
    $catId = VUD_CATEGORIE_ID;
    if ($modele && isset($modele['vud_cat'])) {
        $catId = $modele['vud_cat'];
    }
    return 'https://www.viteundevis.com/in/?pid=' . VUD_PARTENAIRE_ID . '&c=' . $catId;
}

function getVudCatForModele($modele = null)
{
    if ($modele && isset($modele['vud_cat'])) {
        return $modele['vud_cat'];
    }
    return VUD_CATEGORIE_ID;
}

