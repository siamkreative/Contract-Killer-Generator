<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8859-1">
    <title>Killer Contract 3 Generator</title>

    <!--
    see https://mail.google.com/mail/u/0/#label/!CLIENTS%2Finsign/14fd19fc5e6e8ab9?projector=1

    ajouter la clause extra dev et l etalement sur 3 mois

    https://www.1min30.com/inbound-marketing/necessite-clauses-contrat-projet-web-18875
    https://stuffandnonsense.co.uk/projects/contract-killer/

    https://github.com/SiamKreative/Contract-Killer-Generator
    http://www.docracy.com/7079/development-service-contract
    http://www.gethourglass.com/software-development-contract-template.html
    -->

    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//camo.githubusercontent.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//api.filestackapi.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" class="inc_pdf">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,700,300">
    <link rel="stylesheet" type="text/css" href="css/app-screen-only.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">

</head>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <div class="sidebar-inner">
                <h3>Générez votre propre contrat</h3>
                <p class="sidebar-description">Il suffit de remplir les champs ci-dessous et cliquez sur le bouton "Enregistrer au format PDF" pour enregistrer votre contrat en tant au format PDF.</p>
                <form id="form-customize" method="post" data-persist="garlic">
                    <div class="row">
                        <div class="col-lg-8 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Votre nom (de société)</label>
                                <input class="form-control" type="text" name="name" value="davask web limited" placeholder="Votre nom (de société)" required="true" readonly="true">
                            </div>
                        </div>
                        <div class="col-lg-4 hidden-md hidden-sm">
                            <div class="form-group">
                                <!-- https://www.filepicker.com/documentation/file_ingestion/widgets/pick -->
                                <label class="sr-only">Ajouter votre logo</label>
                                <input type="filepicker" data-fp-apikey="AbIR0ecfCQWSKjBIyWN8Uz" data-fp-button-class="btn btn-default btn-block btn-fp" name="logo" data-fp-button-text="+ logo" data-fp-extensions=".png,.jpg,.jpeg,.gif" onchange="jQuery('#logo').attr({'src':event.fpfile.url});" readonly="true">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Votre adresse</label>
                                <input class="form-control" type="text" name="address" value="Room 747, 7/F, Star House, 3 Salisbury Road, Tsimshatsui, Kowloon, Hong Kong" placeholder="Votre adresse" required="true" readonly="true">
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Nom (de la société) du client</label>
                                <input class="form-control" type="text" name="customername" value="" placeholder="Nom (de la société) du client" required>
                            </div>
                        </div>
                        <div class="col-lg-4 hidden-md hidden-sm">
                            <div class="form-group">
                                <label class="sr-only">Ajouter le logo du client</label>
                                <input type="filepicker" data-fp-apikey="AbIR0ecfCQWSKjBIyWN8Uz" data-fp-button-class="btn btn-default btn-block btn-fp" name="logocustomer" data-fp-button-text="+ logo" data-fp-extensions=".png,.jpg,.jpeg,.gif" onchange="jQuery('#logocustomer').attr({'src':event.fpfile.url});">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Adresse du client</label>
                                <input class="form-control" type="text" name="customeraddress" value="" placeholder="Adresse du client" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Description de la tâche</label>
                                <input class="form-control" type="text" name="task" value="" placeholder="Description de la tâche" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Prix total</label>
                                <input class="form-control" type="text" name="total" value="" placeholder="Prix total" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Date</label>
                                <div class="input-group date">
                                    <input type="text" name="date" class="form-control" value="" placeholder="Date ( format JJ/MM/AAAA )"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Calendrier de paiement</label>
                                <textarea class="form-control" name="payment" placeholder="Calendrier de paiement" required>JJ/MM/AAAA : Montant de la trache 1, [...], JJ/MM/AAAA : Montant de la trache N</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Les tribunaux chargés de ce contrat</label>
                                <div class="input-group input-group-court">
                                    <input class="form-control" type="text" name="court" value="français" placeholder="Les tribunaux chargés de ce contrat" required><span class="input-group-addon" title="Locate me" id="locateme"><i class="glyphicon glyphicon-screenshot"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="create-pdf-btn" class="btn btn-primary btn-lg btn-block">Enregistrer au format PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
                    <input id="input-html" type="hidden" name="html" value="">
                </form>

                <div class="sidebar-about hidden-md hidden-sm">
                    <h3>About</h3>
                    <p>
                        Cet outil est basé sur le contrat populaire open-source pour les concepteurs et les développeurs Web par <a href="http://stuffandnonsense.co.uk/">Stuff & Nonsense</a>. Date de révision: <a href="">18/04/2016</a>.
                    </p>
                    <hr>
                    <p>
                        Fabriqué avec <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> à Bangkok par <a href="http://twitter.com/siamkreative/">SiamKreative</a>.
                    </p>
                    <p>
                        Traduit et mis-à-jour avec <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> en Allemagne par <a href="https://twitter.com/davaskwebltd/">davask web limited</a>.
                    </p>
                </div>
            </div>
        </div>
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container">

                    <div id="contract">
                        <h1>CONTRAT DE PRESTATIONS DE SERVICES</h1>
                        <div class="between">
                            <p class="newpage" data-pdf-endpage="2"></p>
                            <p>
                                Entre
                            </p>
                            <p>
                                La société <!-- <img id="logo" class="logo" src="img/logo_428x120.png" alt="">  --><span class="item name">davask web limited</span>, numéro d'incorporation 1782706 sous <i>Companies Ordinance</i> à Hong Kong, représentée par <span class="item username">David Asquiedge</span>.
                            </p>
                            <p>
                                Ci-après désignée comme <b>" le prestataire "</b>
                            </p>
                            <p>
                                D'une part
                            </p>
                            <p>
                                et
                            </p>
                            <p>
                                <span class="item clientname">Alexandra Selly</span> agissant pour le compte de la société <!-- <img id="logocustomer" class="logocustomer" src="http://dummyimage.com/428x120/eee/333333.png&text=LOGO" alt=""> --> <span class="item customername">le nom de la société du client</span>
                            </p>
                            <p>
                                Ci-après dénommée <b>" le client "</b>
                            </p>
                            <p>
                                D'autre part
                            </p>
                            <p>
                                Ci-après désignées collectivement les <b>" Parties "</b> et individuellement la <b>" Partie ".</b>
                            </p>

                            <p>
                                AU PRÉALABLE, IL A ÉTÉ RAPPELÉ CE QUI SUIT :
                            </p>
                            <p>
                                <span class="item name">davask web limited</span> est une société spécialisée dans la conception, la réalisation et la supervision d'applications web au sens large.
                            </p>
                            <p>
                                Le client souhaite faire appel à <span class="item name">davask web limited</span>.
                            </p>
                            <p>
                                Les parties se sont rapprochées afin d'arrêter aux termes du présent contrat (ci-après <b>" Contrat "</b>) les conditions et modalités de leur collaboration.
                            </p>
                            <p>
                                CECI ETANT EXPOSÉ, IL A ÉTÉ CONVENU ET ARRETÉ CE QUI SUIT :
                            </p>
                        </div>

                        <div class="summary">
                            <h2>ARTICLE 1 : OBJET DU CONTRAT</h2>
                            <p>
                                Le présent Contrat a pour objet de définir les modalités de la collaboration entre <span class="item name">davask web limited</span> et le le client, et de définir les conditions dans lesquelles :
                                <ul>
                                    <li>
                                        <span class="item name">davask web limited</span> effectue pour le compte de <span class="item customername">le nom de la société du client</span> les prestations définies à l'Article 2 (ci-après <b>" Prestation "</b>),
                                    </li>
                                    <li>
                                        <span class="item name">davask web limited</span> cède à <span class="item customername">le nom de la société du client</span> l'intégralité des droits de propriété intellectuelle afférents
                                    </li>
                                </ul>
                                aux Prestations, sans exception ni réserve.
                            </p>
                        </div>

                        <p class="newpage" data-pdf-endpage="8"></p>

                        <div class="agree">

                            <h2>ARTICLE 2 : MODALITES DE REALISATION DES PRESTATIONS</h2>

                            <h3>2.1 Commande de la Prestation</h3>
                            <p>
                                Le Client passe une commande (ci-après <b>" Commande "</b>) au Prestataire pour <span class="item task">concevoir et développer un site Web</span>.
                            </p>

                            <h3>2.2 Tarifs & Acompte</h3>
                            <p>
                                Le montant total (ci-après <b>" Montant "</b>) de la Prestation est de <b class="item total"></b>toutes taxes incluses.
                            </p>
                            <p>
                                le Montant indiqué ne prent pas en compte la majoration du mode de paiement choisi par le Client. La Charge du moyen de paiement reste a la charge du CLient ( A titre d'exemple, un paiement par carte bancaire via Paypal aura une majoration de 4.4 % + 0.35 euro soit 44.35 euros pour une facture de 1000 euros toutes taxes incluses )
                            </p>
                            <p>
                                Un accompte (ci-après <b>" Accompte "</b>) de <b class="item deposit"></b> a été défini entre les parties.
                            </p>
                            <p>
                                La Commande est réputée acceptée et le contrat est conclu à réception de l'Accompte par le Prestataire sur son compte bancaire ou tout autre porte-monaie electronique (type paypal).
                            </p>
                            <p>
                                Le Prestataire aura 72 (soixantes douzes) heures pour effectuer un remboursement en cas de refus du contrat.
                            </p>
                            <p>
                                La prestation ne commencera qu'apres reception constatee de l'Accompte.
                            </p>
                            <p>
                                Dans le cas ou le Contrat prevoit un calendrier de paiement (ci-après <b>" Calendrier "</b>), le Client s'engage a regle chaque echeance comme defini dans le Calendrier.
                            </p>

                            <h3>2.3 Prestations</h3>
                            <p>
                                Les Prestations faisant l'objet du présent Contrat sont définies dans la Commande sur la base, de l'offre (ci-après <b>" Offre "</b>) émise par le Prestataire.
                            </p>
                            <p>
                                Le Prestataire doit apporter le plus grand soin ainsi que toutes les diligences à la réalisation des Prestations qui lui sont confiées conformément au présent Contrat.
                            </p>
                            <p>
                                Il s'engage à mener à bonne fin les Prestations dans le respect des règles de l'art, des dispositions légales, réglementaires et contractuelles et s'oblige, pour leur réalisation, à respecter strictement les modalités précisées par le Client.
                            </p>
                            <p>
                                Le Prestataire assume, en ce qui concerne ses Prestations, toutes les obligations techniques, juridiques et administratives résultant du contrat, notamment en ce qui concerne les contraintes liées aux conditions d'exécution. Il indique avoir pris toutes les précautions et mené toutes les investigations utiles pour les apprécier.
                            </p>
                            <p>
                                Le Prestataire agit en tant qu'entrepreneur indépendant et assume de ce fait toutes les charges occasionnées par les Prestations, notamment le recrutement du personnel et versement des salaires et des charges y afférentes.
                            </p>
                            <p>
                                L'ensemble du personnel du Prestataire affecté à l'exécution de la Commande aura les qualifications, les compétences techniques et l'expérience requise pour le travail à réaliser. Le Prestataire fournit seul les matériels nécessaires à l'exécution de la Commande.
                            </p>

                            <h3>2.4 Délai de réalisation des Prestations</h3>
                            <p>
                                Le Prestataire s'engage à livrer les Prestations commandées par le CLient dans un délai indiqué dans la Commande.
                            </p>

                            <p>
                                Le respect du planning établi par les Parties constitue une obligation essentielle du Prestataire qui s'engage à respecter les délais correspondant à la réalisation des Prestations.
                            </p>

                            <p>
                                Le Prestataire s'engage à avertir immédiatement et par écrit VISUAL LINK de tout événement ou circonstance de nature à engendrer un retard dans l'exécution des Prestations.
                            </p>

                            <h3>2.5 Modifications</h3>
                            <p>
                                Les aléas habituels de la Prestation sont à la charge du Prestataire et sont inclus dans le prix contractuel.
                            </p>
                            <p>
                                Si le Client procède, au cours de la réalisation de la Prestation par le Prestataire, à des modifications substantielles des éléments fournis dans la Commande, à savoir des modifications qui entrainent, pour le Prestataire, un investissement substantiel en temps et/ou en moyens (ci-après <b>" Augmentation de la charge de travail"</b>), le Prestataire soumettra un avenant (ci-après <b>"Avenant"</b>) a l'offre initiale definissant les modalités de rémunération de l'Augmentation de la charge de travail du Prestataire ainsi que, le cas echeant, la mise a jour du calendrier de paiement.
                            </p>
                            <p>
                                Le Client aura 72 (soixante douze) heures pour refuser cette Avenant a reception de l Avenant. Sans refus de la part du Client, il s'engage a regle le montant restant en accord, le cas echeant, avec le nouveau calendrier de paiment.
                            </p>
                            <p>
                                Tout retard dans le reglement du calendrier de paiment de la part du Client offre la faculté au Prestataire de suspendre l'execution des taches et/ou la résiliation du présent contrat.
                            </p>

                            <h3>2.6 Sélection et Réception</h3>
                            <p>
                                La réception finale des Prestations est l'acceptation définitive par le Client de la Prestation remise par le Prestataire après complète réalisation de celle-ci.
                            </p>
                            <p>
                                Elle est constatée par un écrit signé et daté par les parties (ci-après <b>" Réception "</b>). Les correspondances mail mentionnant l'acceptation définitive sont valables au titre de la réception.
                            </p>

                        </div>

                        <p class="newpage" data-pdf-endpage="8"></p>

                        <div class="payment">

                            <h2>ARTICLE 3 - PROPRIETE INTELLECTUELLE</h2>

                            <h3>3.1 Droit antérieurs</h3>
                            <p>
                                Le Prestataire et le Client restent chacun propriétaire de l'ensemble des droits de propriété intellectuelle qu'ils ont acquis avant la signature du présent Contrat. Toutefois, lorsque l'exploitation de ces droits est nécessaire pour exploiter les résultats dans les conditions ci-après définies, le Prestatire consent une licence d'utilisation au Client de ces droits pendant la durée définie à l'article 3.2.1.
                            </p>

                            <h3>3.2 Droits d'auteur</h3>
                            <p>
                                Le Prestataire cède, à titre exclusif et définitif, au CLient, l'ensemble des droits d'auteur afférents aux Prestations que le Client aura sélectionnées et réceptionnées de manière définitive, conformément à l'article 2.6 du présent Contrat (ci-après « Créations »). Cette cession sera effectuée au fur et à mesure de la naissance desdits droits.
                            </p>
                            <p>
                                La cession est consentie pour la durée de protection légale des droits de propriété intellectuelle et pour le monde entier.
                            </p>
                            <p>
                                Les droits d'auteur ainsi cédés comprennent le droit exclusif d'exploitation des Créations sous quelque forme et par quelque moyen que ce soit, à savoir notamment les droits de reproduction, d'utilisation, de représentation et d'adaptation des Créations tels que précisés ci-dessous et les prérogatives y afférentes et ce, dans le respect du droit moral de l'auteur sur son oeuvre. Cette cession comprend également les codes sources des développements informatiques. Elle inclut notamment :
                            </p>
                            <p>
                                - Le droit de reproduction et d'utilisation
                            </p>
                            <p>
                                Le droit de reproduction et d'utilisation cédé comprend le droit de fixer ou faire fixer matériellement les Créations, intégralement ou partiellement, par tous procédés qui permettent de les communiquer au public d'une manière indirecte, et ce pour tout type d'utilisation, y compris commerciale ou publicitaire.
                            </p>
                            <p>
                                - Le droit de représentation
                            </p>
                            <p>
                                Le droit de représentation cédé comprend le droit de communiquer ou faire communiquer les Créations au public, intégralement ou partiellement, à titre gratuit ou onéreux, par tout procédé de représentation connu ou inconnu à ce jour, par exposition, affichage, diffusion au moyen de la vidéo, la télématique, le numérique, la télévision (hertzienne, par câble ou satellite), le cinéma, l'informatique, le réseau Internet, sans que cette liste soit limitative, et ce pour tout type d'utilisation, y compris publicitaire ou commerciale.
                            </p>
                            <p>
                                - Le droit d'adaptation
                            </p>
                            <p>
                                Le Client aura le droit d'adapter tout ou partie des Créations. Le droit d'adaptation comprend le droit de modifier, retoucher, fragmenter les Créations en tout ou en partie, sous toute forme et par tout moyen, les dissocier, les assembler avec ou les intégrer dans toute autre création artistique, procéder à des substitutions de matériaux sous réserve du droit moral du Prestataire.
                            </p>

                        </div>

                        <div class="payment">

                            <h2>ARTICLE 4 : CONDITIONS FINANCIERES</h2>

                            <h3>4.1. Rémunération</h3>
                            <p>
                                Le Client s'engage à verser au Prestataire la somme globale et forfaitaire prévue à la Commande acceptée conformément à l'article 2.
                            </p>
                            <p>
                                La rémunération tient compte de toutes les sujétions et difficultés afférentes au travail projeté et comprennent toutes les dépenses, charges et aléas occasionnés pour la réalisation de la Commande.
                            </p>

                            <h3>4.2. Facturation et paiement</h3>
                            <p>
                                Les factures seront émises dans les conditions prévues à la Commande. Elles sont payables par carte bancaire ou virement bancaire à compter de la date d'émission de la facture.
                            </p>

                        </div>

                        <div class="confidentiality">

                            <h2>ARTICLE 5 : CONFIDENTIALITE</h2>

                            <h3>5.1 Definition de la confidentialite</h3>
                            <p>
                                Sont considérées comme confidentielles au sens du présent contrat les informations (ci-après désignées: "les Informations") divulguées par les parties soit sous forme écrite et portant explicitement la mention "confidentiel" soit oralement pour autant que leur nature confidentielle soit indiquée lors de la divulgation et confirmée par écrit par le Client au Prestataire dans les 7 jours suivant leur communication.
                            </p>

                            <h3>5.2 Engagement du prestataire</h3>
                            <p>
                                Le Prestataire s'engage :
                                <ul>
                                    <li>
                                        à recevoir, à traiter et à conserver les Informations de façon strictement Confidentielle;
                                    </li>
                                    <li>
                                        à ne pas utiliser les Informations, directement ou indirectement, pour un autre but que celui indiqué dans l'article "2.1 Commande de la Prestation";
                                    </li>
                                    <li>
                                        à limiter la divulgation des Informations aux membres de son personnel qui ont véritablement besoin de les connaître et qui sont liés par une obligation de garder le secret par rapport aux Informations;
                                    </li>
                                    <li>
                                        à ne divulguer les Informations à aucune autre personne, organisation ou entité, à moins d'en avoir reçu l'autorisation préalable écrite du Client.
                                    </li>
                                </ul>
                            </p>

                            <h3>5.2 Exceptions</h3>
                            <p>
                                Les obligations imposées au Prestataire selon l'article "3.2 Engagement du prestataire" ne s'appliquent pas aux Informations qui:
                                <ul>
                                    <li>
                                        étaient dans le domaine public ou étaient accessibles au public au moment de leur transmission au Prestataire,
                                    </li>
                                    <li>
                                        ou qui sont par la suite tombées dans le domaine public ou sont devenues accessibles au public pour des raisons autres qu'une action ou une omission imputable au Prestataire,
                                    </li>
                                    <li>
                                        ou qui étaient en la possession du Prestataire à condition que les Informations ne fissent l'objet d'aucune limitation quant à leur divulgation au moment de leur transmission au Prestataire et à condition que cette possession antérieure puisse être prouvée par des documents écrits,
                                    </li>
                                    <li>
                                        ou qui ont été obtenues de bonne foi par le Prestataire d'un tiers qui était autorisé à les transmettre.
                                    </li>
                                </ul>
                            </p>

                        </div>


                        <div class="cancellation">
                            <h2>ARTICLE 6 - DUREE</h2>
                            <p>
                                Le présent contrat entre en vigueur au jour de la signature des présentes.
                            </p>
                            <p>
                                Il est conclu pour une durée d'une (1) année et est reconductible par tacite reconduction.
                            </p>
                            <p>
                                Chacune des Parties pourra y mettre fin, à tout moment, moyennant le respect d'un préavis écrit de trois (3) mois, notifié à l'autre Partie par lettre recommandée avec accusé de réception.
                            </p>
                        </div>
                        <div class="cancellation">
                            <h2>ARTICLE 7 - RESILIATION ANTICIPEE - CONSEQUENCES DE LA RUPTURE</h2>
                            <p>
                                7.1 Le présent accord pourra être résilié par le Prestataire avec effet immédiat sans indemnités dans les hypothèses suivantes:
                                <ul>
                                    <li>
                                        défaillance du Client laquelle est définie comme l'inexécution de ses obligations contractuelles, à condition que l'inexécution reprochée se poursuive plus de 7 jours à compter de la mise en demeure de s'exécuter adressée par le Prestataire. En cas d'urgence  justifiée, la rupture sera à effet immédiat.<br/>
                                        La résiliation aura lieu sans préjudice de la faculté pour le Prestataire de demander le solde du Montant dut, le cas echeant, en accord avec le Calendrier.
                                    </li>
                                    <li>
                                        risque d'insolvabilité et/ou risque sérieux de défaut d'exécution de ses obligations par le Client.
                                    </li>
                                </ul>
                            </p>
                            <p>
                                7.2 En cas de rupture anticipée du Contrat pour quelque cause que ce soit, et si les Prestations n'ont pas encore été réceptionnées par le CLient, le Prestataire notifiera au Client la date à laquelle il sera procédé à un constat contradictoire d'état des lieux et d'avancement des Prestations. Un décompte de résiliation sera alors effectué entre les Parties au vu des résultats obtenus par le Prestataire au jour de la rupture. En l'absence d'un représentant du Client à cette date, le constat sera réputé contradictoire.
                            </p>
                            <p>
                                Il est entendu que, sauf rupture anticipée imputable au Client, le Prestataire s'engage à remettre au Client les travaux dans leur état d'avancement au jour de la rupture. Le Client règlera au prestataire les prestations d'ors et déjà réalisées.
                            </p>

                        </div>

                        <div class="major">
                            <h2>ARTICLE 8 - FORCE MAJEURE</h2>

                            <p>
                                Dans un premier temps, le cas de force majeure suspendra les obligations résultant du présent Contrat. Si le cas de force majeure a vocation à se poursuivre pendant plus de trente (30) jours, les Parties se rencontreront afin de trouver une solution. Si aucune solution n'a été trouvée et si le cas de force majeure a vocation à se poursuivre pendant soixante (60) jours à l'issue de l'écoulement du premier délai de trente (30) jours, chaque Partie aura la faculté de mettre fin, sans indemnité, à la réalisation de la Prestation par lettre recommandée avec avis de réception adressée à l'autre Partie moyennant le respect d'un préavis de quarante-cinq (45) jours.
                            </p>
                            <p>
                                Sont considérés comme cas de force majeure, ceux habituellement reconnus par les tribunaux.
                            </p>

                        </div>

                        <div class="general">
                            <h2>ARTICLE 9 - DISPOSITIONS GENERALES</h2>

                            <h3>9.1 Indépendance réciproque</h3>
                            <p>
                                Les Parties déclarent expressément qu'elles sont et demeureront, pendant toute la durée du présent Contrat, des partenaires indépendants à tous égards, assumant chacune les risques de sa propre activité.
                            </p>

                            <p>
                                En conséquence, le Prestataire assume toutes les charges occasionnées par les Prestations, notamment : paiement des taxes, impôts, primes d'assurances..., la présente énumération n'étant pas limitative. Le Prestataire devra veiller, particulièrement, à ce qu'aucune confusion ne puisse se faire sur sa qualité d'indépendant.
                            </p>

                            <p>
                                Le Prestataire ne pourra en aucun cas être assimilé juridiquement à un salarié de VISUAL LINK, lequel ne pourra à aucun moment lui donner des consignes. En conséquence, le Prestataire, dans ses rapports avec VISUAL LINK, ne saurait en aucun cas relever des dispositions du Code du Travail.
                            </p>

                            <h3>9.2 Loyauté - Bonne foi</h3>
                            <p>
                                La bonne exécution du présent Contrat suppose une coopération constante et sincère entre les Parties. Toute difficulté sera immédiatement portée à la connaissance de l'autre Partie pour que des solutions soient mises en oeuvre d'un commun accord.
                            </p>

                            <p>
                                Les Parties s'engagent à un devoir de loyauté et d'information.
                            </p>

                            <p>
                                Les Parties s'engagent à exécuter de bonne foi les obligations qui leur incombent et s'abstiendront de prendre ou de faire prendre tout acte ou toute mesure, de conclure ou faire conclure tout accord qui aurait pour effet de faire obstacle à la bonne exécution du contrat ou de tout acte ou accord passé en exécution dudit Contrat.
                            </p>

                            <p>
                                Les Parties conviennent de signer et de délivrer tous les documents qui peuvent s'avérer nécessaires à l'application des dispositions du Contrat.
                            </p>

                            <h3>9.3 Divers</h3>
                            <p>
                                Le présent Contrat et ses annexes expriment l'intégralité des obligations des Parties. Ils prévalent sur toutes conditions générales d'achat ou de vente et tout autre accord antérieur convenu entre les Parties.
                            </p>

                            <p>
                                Toute modification du présent Contrat fera l'objet d'un avenant daté et signé par les Parties.
                            </p>

                            <p>
                                Le fait, pour l'une des Parties, de ne pas se prévaloir d'un manquement par l'autre Partie à l'une quelconque des obligations visées dans les présentes, ne saurait être interprété comme une renonciation à l'obligation en cause.
                            </p>

                            <p>
                                Si une ou plusieurs stipulations du Contrat sont déclarées non valides ou non écrites en application de la réglementation en vigueur ou à la suite d'une décision définitive d'une juridiction compétente, les autres stipulations garderont toute leur force et portée.
                            </p>

                        </div>

                        <div class="domicile">
                            <h2>ARTICLE 10 - ELECTION DE DOMICILE </h2>

                            <p>
                                Pour les besoins des présentes, les Parties font élection de domicile aux adresses indiquées en tête des présentes.
                            </p>

                            <p>
                                Toute modification devra être signifiée par lettre recommandée avec demande d'avis de réception à l'autre Partie, afin de lui être opposable.
                            </p>

                        </div>

                        <div class="juridiction">
                            <h2>ARTICLE 11 - DROIT APPLICABLE ET JURIDICTION COMPETENTE</h2>

                            <p>
                                Les dispositions du présent Contrat sont régies par le droit <span class="item court">français</span>.
                            </p>

                            <p>
                                TOUT LITIGE EN RELATION AVEC LE PRESENT CONTRAT ET QUE LES PARTIES NE SAURAIENT RESOUDRE A L'AMIABLE SERA PORTE DEVANT LE TRIBUNAL AU CHOIX DU PRESTATAIRE.
                            </p>

                        </div>

                        <p class="newpage" data-pdf-endpage="2"></p>

                        <div class="signature">
                            <p>
                                Fait en 2 (deux) exemplaires.
                            </p>
                            <p>
                                A Erlangen
                            </p>
                            <p>
                                Le <span class="item date">date</span>
                            </p>
                            <div id="signatures" class="row">
                                <p>
                                    Pour <span class="item name">nom de l'entreprise</span>
                                </p>
                                <p>
                                    Pour <span class="item customername">nom de l'entreprise</span>
                                </p>
                            </div>
                        </div>


                    </div><!-- /#contract -->
                </div><!-- /.container -->
            </div>
        </div>
    </div>

    <a href="https://github.com/davask">
        <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png">
    </a>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="//api.filestackapi.com/filestack.js"></script>
    <script type="text/javascript" src="vendor/Garlic/dist/garlic.min.js"></script>
    <script type="text/javascript" src="vendor/jsPDF/dist/jspdf.debug.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-76556627-1', 'auto');
        ga('send', 'pageview');

    </script>

</body>
</html>