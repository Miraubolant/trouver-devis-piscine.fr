<?php
/**
 * ============================================
 * ANNUAIRE-PISCINISTE.PRO - CONFIGURATION
 * ============================================
 */

define('SITE_NAME', 'trouver-devis-piscine.fr');
define('SITE_DOMAIN', 'trouver-devis-piscine.fr');
define('SITE_URL', 'https://trouver-devis-piscine.fr');
define('SITE_EMAIL', 'contact@trouver-devis-piscine.fr');
define('SITE_TAGLINE', "Pisciniste et Construction Partout en France");
define('SITE_DESCRIPTION', "Trouvez un pisciniste professionnel pour la construction ou la rénovation de votre piscine.");

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
    ['slug' => 'piscine-coque', 'nom' => 'Piscine Coque', 'emoji' => "🏊", 'vud_cat' => '44'],
    ['slug' => 'piscine-beton', 'nom' => 'Piscine Béton', 'emoji' => "🏖️", 'vud_cat' => '44'],
    ['slug' => 'entretien-piscine', 'nom' => 'Entretien & Rénovation', 'emoji' => "🧹", 'vud_cat' => '44'],
    ['slug' => 'piscine-bois', 'nom' => 'Piscine Bois', 'emoji' => "🪵", 'vud_cat' => '44'],
    ['slug' => 'piscine-hors-sol', 'nom' => 'Piscine Hors Sol', 'emoji' => "🪜", 'vud_cat' => '44'],
    ['slug' => 'piscine-enterree', 'nom' => 'Piscine Enterrée', 'emoji' => "🕳️", 'vud_cat' => '44'],
    ['slug' => 'piscine-semi-enterree', 'nom' => 'Piscine Semi-Enterrée', 'emoji' => "🧱", 'vud_cat' => '44'],
    ['slug' => 'piscine-interieure', 'nom' => 'Piscine Intérieure', 'emoji' => "🏠", 'vud_cat' => '44'],
    ['slug' => 'piscine-debordement', 'nom' => 'Piscine à Débordement', 'emoji' => "🌊", 'vud_cat' => '44'],
    ['slug' => 'piscine-miroir', 'nom' => 'Piscine Miroir', 'emoji' => "🪞", 'vud_cat' => '44'],
    ['slug' => 'filtration-piscine', 'nom' => 'Système de Filtration', 'emoji' => "💧", 'vud_cat' => '44'],
    ['slug' => 'pompe-chaleur-piscine', 'nom' => 'Pompe à Chaleur', 'emoji' => "🌡️", 'vud_cat' => '44'],
    ['slug' => 'volet-roulant-piscine', 'nom' => 'Volet Roulant', 'emoji' => "🛡️", 'vud_cat' => '44'],
    ['slug' => 'bache-piscine', 'nom' => 'Bâche de Piscine', 'emoji' => "🎪", 'vud_cat' => '44'],
    ['slug' => 'abri-piscine', 'nom' => 'Abri de Piscine', 'emoji' => "🛖", 'vud_cat' => '44'],
    ['slug' => 'domotique-piscine', 'nom' => 'Domotique Piscine', 'emoji' => "📱", 'vud_cat' => '44'],
    ['slug' => 'liner-piscine', 'nom' => 'Pose de Liner', 'emoji' => "📏", 'vud_cat' => '44'],
    ['slug' => 'carrelage-piscine', 'nom' => 'Carrelage Piscine', 'emoji' => "🧊", 'vud_cat' => '44'],
    ['slug' => 'enduit-piscine', 'nom' => 'Enduit Piscine', 'emoji' => "🖌️", 'vud_cat' => '44'],
    ['slug' => 'nettoyage-piscine', 'nom' => 'Nettoyage Piscine', 'emoji' => "🤖", 'vud_cat' => '44'],
    ['slug' => 'hivernage-piscine', 'nom' => 'Hivernage', 'emoji' => "❄️", 'vud_cat' => '44'],
    ['slug' => 'remise-en-route-piscine', 'nom' => 'Remise en Route', 'emoji' => "☀️", 'vud_cat' => '44'],
    ['slug' => 'recherche-fuite-piscine', 'nom' => 'Recherche de Fuite', 'emoji' => "🔍", 'vud_cat' => '44'],
    ['slug' => 'traitement-eau', 'nom' => 'Traitement de l\'Eau', 'emoji' => "🧪", 'vud_cat' => '44'],
    ['slug' => 'piscine-naturelle', 'nom' => 'Piscine Naturelle', 'emoji' => "🌿", 'vud_cat' => '44'],
    ['slug' => 'spa-jacuzzi', 'nom' => 'Spa & Jacuzzi', 'emoji' => "🛁", 'vud_cat' => '44'],
    ['slug' => 'couloir-nage', 'nom' => 'Couloir de Nage', 'emoji' => "🏊‍♂️", 'vud_cat' => '44'],
    ['slug' => 'piscine-kit', 'nom' => 'Piscine en Kit', 'emoji' => "📦", 'vud_cat' => '44'],
    ['slug' => 'plage-piscine', 'nom' => 'Plage de Piscine', 'emoji' => "🌴", 'vud_cat' => '44'],
    ['slug' => 'renovation-piscine', 'nom' => 'Rénovation Complète', 'emoji' => "✨", 'vud_cat' => '44'],
]);

define('STYLES', [
    ['slug' => 'piscine-coque', 'nom' => 'Piscine Coque', 'emoji' => "🏊", 'desc' => 'Installation rapide, formes variées'],
    ['slug' => 'piscine-beton', 'nom' => 'Piscine Béton', 'emoji' => "🏖️", 'desc' => 'Sur mesure et très résistant'],
    ['slug' => 'entretien-piscine', 'nom' => 'Entretien & Rénovation', 'emoji' => "🧹", 'desc' => 'Maintenance régulière et ponctuelle'],
    ['slug' => 'piscine-bois', 'nom' => 'Piscine Bois', 'emoji' => "🪵", 'desc' => 'Aspect naturel et chaleureux'],
    ['slug' => 'piscine-hors-sol', 'nom' => 'Piscine Hors Sol', 'emoji' => "🪜", 'desc' => 'Sans terrassement, montage simple'],
    ['slug' => 'piscine-enterree', 'nom' => 'Piscine Enterrée', 'emoji' => "🕳️", 'desc' => 'Bassin classique intégré au sol'],
    ['slug' => 'piscine-semi-enterree', 'nom' => 'Piscine Semi-Enterrée', 'emoji' => "🧱", 'desc' => 'Idéale pour les terrains en pente'],
    ['slug' => 'piscine-interieure', 'nom' => 'Piscine Intérieure', 'emoji' => "🏠", 'desc' => 'Baignade toute l\'année'],
    ['slug' => 'piscine-debordement', 'nom' => 'Piscine à Débordement', 'emoji' => "🌊", 'desc' => 'Effet visuel spectaculaire'],
    ['slug' => 'piscine-miroir', 'nom' => 'Piscine Miroir', 'emoji' => "🪞", 'desc' => 'L\'eau au niveau des margelles'],
    ['slug' => 'filtration-piscine', 'nom' => 'Système de Filtration', 'emoji' => "💧", 'desc' => 'Pompe, filtre à sable ou cartouche'],
    ['slug' => 'pompe-chaleur-piscine', 'nom' => 'Pompe à Chaleur', 'emoji' => "🌡️", 'desc' => 'Chauffage de l\'eau économique'],
    ['slug' => 'volet-roulant-piscine', 'nom' => 'Volet Roulant', 'emoji' => "🛡️", 'desc' => 'Sécurité et maintien de la température'],
    ['slug' => 'bache-piscine', 'nom' => 'Bâche de Piscine', 'emoji' => "🎪", 'desc' => 'Couverture d\'été ou d\'hiver'],
    ['slug' => 'abri-piscine', 'nom' => 'Abri de Piscine', 'emoji' => "🛖", 'desc' => 'Protection et chauffage naturel'],
    ['slug' => 'domotique-piscine', 'nom' => 'Domotique Piscine', 'emoji' => "📱", 'desc' => 'Contrôle à distance (pompe, éclairage)'],
    ['slug' => 'liner-piscine', 'nom' => 'Pose de Liner', 'emoji' => "📏", 'desc' => 'Revêtement étanche PVC'],
    ['slug' => 'carrelage-piscine', 'nom' => 'Carrelage Piscine', 'emoji' => "🧊", 'desc' => 'Revêtement durable et luxueux'],
    ['slug' => 'enduit-piscine', 'nom' => 'Enduit Piscine', 'emoji' => "🖌️", 'desc' => 'Finition pour piscine béton'],
    ['slug' => 'nettoyage-piscine', 'nom' => 'Nettoyage Piscine', 'emoji' => "🤖", 'desc' => 'Robots et nettoyage manuel'],
    ['slug' => 'hivernage-piscine', 'nom' => 'Hivernage', 'emoji' => "❄️", 'desc' => 'Mise au repos du bassin'],
    ['slug' => 'remise-en-route-piscine', 'nom' => 'Remise en Route', 'emoji' => "☀️", 'desc' => 'Préparation pour la saison estivale'],
    ['slug' => 'recherche-fuite-piscine', 'nom' => 'Recherche de Fuite', 'emoji' => "🔍", 'desc' => 'Détection précise sans casse'],
    ['slug' => 'traitement-eau', 'nom' => 'Traitement de l\'Eau', 'emoji' => "🧪", 'desc' => 'Chlore, brome, sel, UV'],
    ['slug' => 'piscine-naturelle', 'nom' => 'Piscine Naturelle', 'emoji' => "🌿", 'desc' => 'Filtration par les plantes'],
    ['slug' => 'spa-jacuzzi', 'nom' => 'Spa & Jacuzzi', 'emoji' => "🛁", 'desc' => 'Bassin à remous relaxant'],
    ['slug' => 'couloir-nage', 'nom' => 'Couloir de Nage', 'emoji' => "🏊‍♂️", 'desc' => 'Bassin long et étroit pour sportifs'],
    ['slug' => 'piscine-kit', 'nom' => 'Piscine en Kit', 'emoji' => "📦", 'desc' => 'Montage par le client ou assisté'],
    ['slug' => 'plage-piscine', 'nom' => 'Plage de Piscine', 'emoji' => "🌴", 'desc' => 'Aménagement autour du bassin'],
    ['slug' => 'renovation-piscine', 'nom' => 'Rénovation Complète', 'emoji' => "✨", 'desc' => 'Refonte esthétique et technique'],
]);

define('SERVICES', [
    [
        'titre' => "Construction & Installation",
        'icon' => "🚧",
        'desc' => "Conception sur mesure ou installation de piscines coque, béton, ou bois adaptées à votre terrain et votre budget.",
        'points' => ["Étude de faisabilité et terrassement", "Accompagnement démarches (PLU)", "Garantie décennale constructeur"]
    ],
    [
        'titre' => "Entretien & Équipements",
        'icon' => "⚙️",
        'desc' => "Maintien de la qualité de votre eau et installation d'accessoires (pompes à chaleur, volets, abris).",
        'points' => ["Contrats d'entretien annuel", "Hivernage et remise en route", "Installation de chauffage"]
    ],
    [
        'titre' => "Rénovation & Étanchéité",
        'icon' => "✨",
        'desc' => "Modernisation de bassins vieillissants : changement de liner, détection de fuites et réfection des plages.",
        'points' => ["Remplacement de liner ou carrelage", "Modification des escaliers/plages", "Mise aux normes de sécurité"]
    ],
]);

define('FAQ_ACCUEIL', [
    [
        'question' => "Faut-il un permis de construire pour une piscine ?",
        'reponse' => "Une déclaration préalable de travaux suffit pour une piscine dont le bassin fait entre 10 et 100 m² (sans abri ou avec un abri inférieur à 1,80m de haut). Au-delà de 100 m², un permis de construire est exigé. Les piscines hors sol installées moins de 3 mois dans l'année (et de moins de 10 m²) sont dispensées d'autorisation, sauf secteurs protégés."
    ],
    [
        'question' => "Quelle est la différence entre une piscine coque et une piscine béton ?",
        'reponse' => "La piscine coque (en polyester) est fabriquée en usine et livrée d'un bloc. Son installation est très rapide (quelques jours) et son fond est très lisse. La piscine en béton est coulée ou maçonnée sur place : sa construction est plus longue mais elle permet le vrai 'sur-mesure' (formes, tailles, profondeur) et offre une solidité incomparable sur la durée."
    ],
    [
        'question' => "Quelles sont les obligations légales de sécurité ?",
        'reponse' => "En France, toute piscine enterrée non close privative à usage individuel doit être équipée au moins d'un des quatre dispositifs de sécurité homologués : une alarme (immersion ou périmétrique), une barrière de protection, une couverture de sécurité (bâche à barre, volet) ou un abri de piscine."
    ],
    [
        'question' => "Combien de temps faut-il pour créer une piscine enterrée ?",
        'reponse' => "Pour une piscine coque, l'installation prend en général 1 à 2 semaines (terrassement compris). Pour une piscine béton traditionnelle, comptez entre 4 et 8 semaines de travaux en fonction des finitions (liner, carrelage) et de la météo."
    ],
    [
        'question' => "Quel est le budget moyen pour une piscine creusée ?",
        'reponse' => "Le prix varie énormément selon le type : à partir de 15 000 € pour une piscine coque standard prête à plonger, et souvent entre 25 000 € et 40 000 € pour une piscine maçonnée en béton. N'oubliez pas d'inclure le coût de la filtration, des dispositifs de sécurité et des terrasses."
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
    ['titre' => 'Réseau National', 'desc' => 'Des milliers de professionnels référencés dans toute la France.', 'icon' => "🗺️"],
    ['titre' => 'Partenaires Expérimentés', 'desc' => 'Trouvez le bon interlocuteur pour la réussite de votre projet', 'icon' => "✅"],
    ['titre' => 'Mise en Relation Rapide', 'desc' => 'Obtenez gratuitement des devis adaptés à vos besoins.', 'icon' => "💰"],
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
