<?php
/* General stuff */
$LANGS['language'] = 'Català';
$LANGS['languageenglish'] = 'Català';
$LANGS['languagecode'] = 'ca_ES.UTF-8'; /* Leave the ".UTF-8" in the end as-is, as it might break some dates */
$LANGS['languagechange'] = "L'idioma del lloc ha estat canviat al Català.";
$LANGS['numberformat'] = 0; /* If your language uses comma separators (example: 1,000,000), value will be 1. If it uses dots (example: 1.000.000) or doesn't use separators, value will be 0.*/

/* Language window */
$LANGS['welcometobitview'] = 'Benvolgut a BitView!';
$LANGS['languagesuggestion'] = "Sugerència d'idioma (preferència establerta):";
$LANGS['languagesuggestiondesc1'] = "Per canviar la preferència d'idioma, feu servir el menú de selecció d'idiomes situat a la part inferior de la pàgina.";
$LANGS['languagesuggestiondesc2'] = 'Feu clic a "Acceptar" per acceptar aquesta configuració o a "Cancel·lar" per veure el lloc en anglès.';

/* Time, dates, etc */
$LANGS['second'] = 'segon';
$LANGS['minute'] = 'minut';
$LANGS['hour'] = 'hora';
$LANGS['day'] = 'dia';
$LANGS['week'] = 'setmana';
$LANGS['month'] = 'mes';
$LANGS['year'] = 'any';
$LANGS['seconds'] = 'segons';
$LANGS['minutes'] = 'minuts';
$LANGS['hours'] = 'hores';
$LANGS['days'] = 'dies';
$LANGS['weeks'] = 'setmanes';
$LANGS['months'] = 'mesos';
$LANGS['years'] = 'anys';
$LANGS['ago1'] = 'fa '; /* Explanation: Text before "x seconds/minutes/hours..." Example: "hace (1 día)" in Spanish. If your language doesn't use this, leave it empty like this: ''*/
$LANGS['ago2'] = ''; /* Explanation: ago2 -> Text after "x seconds/minutes/hours..." Example: "(1 day) ago" in English, "(1 anno) fa" in Italian. If your language doesn't use this, leave it empty like this: ''*/
$LANGS['january'] = 'Gener';
$LANGS['february'] = 'Febrer';
$LANGS['march'] = 'Març';
$LANGS['april'] = 'Abril';
$LANGS['may'] = 'Maig';
$LANGS['june'] = 'Juny';
$LANGS['july'] = 'Juliol';
$LANGS['august'] = 'Agost';
$LANGS['september'] = 'Setembre';
$LANGS['october'] = 'Octubre';
$LANGS['november'] = 'Novembre';
$LANGS['december'] = 'Desembre';
$LANGS['shorttimeformat'] = '%e %b %Y';
$LANGS['videotimeformat'] = '%e de %B de %Y';
$LANGS['longtimeformat'] = '%e de %B de %Y';
$LANGS['timehourformat'] = '%e de %B de %Y, %k:%M:%S';
$LANGS['myvideostimeformat'] = '%a %e %b %Y, %k:%M:%S';
$LANGS['blogpostformat'] = '%A, %e de %B de %Y';
$LANGS['timenumberformat'] = 'd/m/Y';

/* Header */
$LANGS['home'] = 'Inici';
$LANGS['videos'] = 'Vídeos';
$LANGS['channels'] = 'Canals';
$LANGS['community'] = 'Comunitat';
$LANGS['search'] = 'Cerca';
$LANGS['login'] = 'Inicia la sessió';
$LANGS['or'] = 'o';
$LANGS['signup'] = 'Crea un compte';
$LANGS['logout'] = 'Tanca la sessió';
$LANGS['upload'] = 'Penja';
$LANGS['subscriptions'] = 'Subscripcions';
$LANGS['history'] = 'Historial';
$LANGS['account'] = 'Compte';
$LANGS['myvideos'] = 'Els meus vídeos';
$LANGS['favorites'] = 'Favorits';
$LANGS['playlists'] = 'Llistes de reproducció';
$LANGS['help'] = 'Ajuda';

/* Homepage */
$LANGS['viewall'] = 'veure tot';
$LANGS['videoviews'] = 'visualitzacions';
$LANGS['beingwatched'] = "Vídeos que s'estan mirant ara";
$LANGS['featured'] = 'Vídeos destacats';
$LANGS['recommendedforyou'] = 'Recomanat per a tu';
$LANGS['mostpopular'] = 'Més populars';
$LANGS['inboxstats'] = "Safata d'entrada";
$LANGS['profilesettings'] = 'configuració del compte';
$LANGS['messages'] = 'missatges';
$LANGS['message'] = 'missatge';
$LANGS['comments'] = 'comentaris';
$LANGS['comment'] = 'comentari';
$LANGS['friendinvites'] = "sol·licituds d'amistat";
$LANGS['friendinvite'] = "sol·licituds d'amistat";
$LANGS['subscribers'] = 'subscriptors';
$LANGS['subscriber'] = 'Subscriptor';
$LANGS['totalviews'] = 'visualitzacions totals';
$LANGS['sendmessage'] = 'enviar missatge';
$LANGS['whatsnew'] = "Novetats";
$LANGS['readmore'] = 'Més informació al nostre bloc';
$LANGS['videocontest'] = '- Concurs de vídeos';
$LANGS['joincontest'] = 'Participa ja!';
$LANGS['personalize'] = "Vols personalitzar aquesta pàgina d'inici?";
$LANGS['signinnow'] = '<a href="/login">Inicia la sessió</a> o <a href="/signup">crea un compte</a> ara!';
$LANGS['nowconverting'] = "El vídeo s'està processant, espera uns minuts.";
$LANGS['modules'] = "Afegir / Eliminar mòduls";
$LANGS['friendactivity'] = "Activitat d'amics";
$LANGS['customizehomepage'] = "Personalitzar pàgina principal";
$LANGS['customizethehomepage'] = "Personalitzar la pàgina principal";
$LANGS['customizehomepagedesc'] = "Selecciona els mòduls que vols vore en la teua pàgina principal.";
$LANGS['displaypreferences'] = "Preferències de visualització";
$LANGS['thefeed'] = "El feed";
$LANGS['thefeeddesc'] = "combina tots el teus mòduls en un únic feed.";
$LANGS['friendactivitytitle'] = "Activitat d'amics: poden veure altres usuaris què faig?";
$LANGS['friendactivitydesc'] = "Aquesta secció mostra als vostres amics confirmats les accions que mostres de forma pública al vostre historial d'activitat. Per exemple, si afegiu un vídeo com a favorit, el vostre nou vídeo favorit es mostrarà a la caixa d'Activitat recent del vostre canal i a les pàgines principals dels vostres amics.";
$LANGS['feedfeatured'] = "Vídeo destacat";
$LANGS['feedbeingwatched'] = "Vídeo que s'està mirant ara";
$LANGS['feedrecommended'] = "Vídeo recomanat";
$LANGS['nosubscriptions'] = "Encara no t'has subscrit a cap canal.";
$LANGS['nosubscriptionsdesc'] = "Quan afegiu subscripcions noves, mostrarem les seves penjades aquí en aquesta pàgina.";
$LANGS['nofriendactivity'] = "Encara no has afegit cap amic.";
$LANGS['nofriendactivitydesc'] = "Pots intentar afegir alguns amics. Aleshores, mostrarem la seva activitat aquí en aquesta pàgina.";

/* Page title */
$LANGS['homepretitle'] = "BitView de "; /* Explanation: Use if "BitView" goes before the username. Example: "BitView de username" in Spanish. If your language doesn't use this, leave it empty like this: ''*/
$LANGS['homeposttitle'] = ""; /* Explanation: Use if "BitView" goes after the username. Example: "username's BitView" in English. If your language doesn't use this, leave it empty like this: '' */
$LANGS['chpretitle'] = "Canal de "; /* Explanation: Use if "channel" goes before the username. Example: "Canal de username" in Spanish. If your language doesn't use this, leave it empty like this: ''*/
$LANGS['chposttitle'] = ""; /* Explanation: Use if "channel" goes after the username. Example: "username's Channel" in English. If your language doesn't use this, leave it empty like this: '' */
$LANGS['signintitle'] = "Inicia la sessió";
$LANGS['historytitle'] = "Historial";
$LANGS['favtitle'] = "Favorits";
$LANGS['pltitle'] = "Llistes de reproducció";
$LANGS['partnerprogram'] = "Programa de socis";

/* Notifications */
$LANGS['searcherror'] = 'Your search query much be at least 2 characters long!';
$LANGS['addvideoplaylist1'] = "You've added";
$LANGS['addvideoplaylist2'] = 'videos to your playlist!';
$LANGS['addfavorite1'] = "You favorited";
$LANGS['addfavorite2'] = 'videos!';
$LANGS['groupdoesnotexist'] = "This group doesn't exist!";
$LANGS['uploaddisabled'] = 'Uploading has been disabled for maintenance.';
$LANGS['10vidsday'] = 'You can not upload more than 10 videos per day! Please try uploading tomorrow.';
$LANGS['3mins'] = 'Wait 3 minutes until you upload a new video!';
$LANGS['backgroundsuccess'] = 'Background has been successfully uploaded!';
$LANGS['backgrounderror'] = 'Background image must be under 2MB and be an image file!';
$LANGS['backgrounddeleted'] = 'Background has been successfully deleted!';
$LANGS['bannersuccess'] = 'Banner has been successfully uploaded!';
$LANGS['bannererror'] = 'Banner image must be under 2MB and be an image file!';
$LANGS['bannerdeleted'] = 'Your banner has been successfully deleted!';
$LANGS['minibannersuccess'] = 'Mini banner has been successfully uploaded!';
$LANGS['minibannererror'] = 'Mini banner image must be under 2MB and be an image file!';
$LANGS['minibannerdeleted'] = 'Your mini banner has been successfully deleted!';
$LANGS['sideimagesuccess'] = 'Side image has been successfully uploaded!';
$LANGS['sideimageerror'] = 'Side image must be under 2MB and be an image file!';
$LANGS['sideimagedeleted'] = 'Side image has been successfully deleted!';
$LANGS['avatarsuccess'] = 'Avatar has been successfully uploaded!';
$LANGS['avatarerror'] = 'Avatar image must be under 1MB and be an image file!';
$LANGS['avatardeleted'] = '"Avatar has been successfully deleted!';
$LANGS['changessaved'] = 'Changes were successfully saved!';
$LANGS['profilesdisabled'] = 'Profiles have been disabled for maintenance.';
$LANGS['bulletinposted'] = 'Bulletin has been posted!';
$LANGS['channelcommentsent'] = 'Channel comment has been submitted!';
$LANGS['somethingwentwrong'] = 'Something went wrong!';
$LANGS['replysubmitted'] = 'Reply has been submitted!';
$LANGS['onlyonecomment'] = 'You can only leave one comment!';
$LANGS['vpnbrowser'] = "You can't use a VPN to create a BitView account!";
$LANGS['torbrowser'] = "You can't use TOR to create a BitView account!";
$LANGS['captchaincorrect'] = "You didn't type in the code correctly.";
$LANGS['toomanyaccounts'] = 'You have too many accounts!';
$LANGS['banned2times'] = "You've been banned 2 times already. You cannot create more accounts!";
$LANGS['nohistory'] = "You haven't watched any videos during this session yet!";
$LANGS['historycleared'] = 'Your viewing history has been cleared.';
$LANGS['watchdisabled'] = 'Video watching has been disabled for maintenance.';
$LANGS['videonotexist'] = 'This video does not exist or has been removed due to Terms of Use violation.';
$LANGS['responseerror'] = 'Something went wrong with your video response! Please check URL again.';
$LANGS['responseexist'] = 'Video has been already requested!';
$LANGS['responseadded'] = 'Video response added successfully!';
$LANGS['responseaccepted'] = 'Accepted new Video Response!';
$LANGS['60secscomment'] = 'Please wait 60 seconds before adding a new comment!';
$LANGS['plnotexist'] = "This playlist doesn't exist!";
$LANGS['positionnotexist'] = "This position doesn't exist!";
$LANGS['positionchanged'] = "Video's position changed!";
$LANGS['invalidurl'] = 'Invalid URL!';
$LANGS['videopladded'] = 'Video successfully added!';
$LANGS['videoalreadyinpl'] = 'This video is already in this playlist!';
$LANGS['plvideoremoved'] = 'Video has been removed!';
$LANGS['plinfochanged'] = 'Playlist information got successfully changed!';
$LANGS['pltitleneeded'] = 'You must set a title for the playlist!';
$LANGS['flashenabled'] = 'Adobe Flash Player enabled!';
$LANGS['flashdisabled'] = 'Adobe Flash Player disabled!';
$LANGS['messagesent'] = 'Message has been successfully sent!';
$LANGS['usernotexist'] = "This user doesn't exist!";
$LANGS['nocriteria'] = "You don't meet the required criteria!";
$LANGS['alreadypartner'] = 'You have already been accepted into the parnters program!';
$LANGS['alreadyapplied'] = 'You have already applied!';
$LANGS['applicationsent'] = 'Your application has been submitted!';
$LANGS['joinedgroup'] = 'You successfully joined the group!';
$LANGS['leftgroup'] = 'You successfully left the group!';
$LANGS['grouprequest'] = 'You successfully sent a group request! Now you must wait for it to be accepted.';
$LANGS['groupdeleted'] = 'Group has successfully been deleted!';
$LANGS['groupvideoadded'] = 'Video has been submitted!';
$LANGS['groupvideoalreadyadded'] = 'You already submitted this video!';
$LANGS['groupvideonotowned'] = "You don't own this video!";
$LANGS['3groups'] = 'You can only own up to 3 groups!';
$LANGS['groupnameempty'] = 'Group name cannot be left empty!';
$LANGS['groupdescempty'] = 'Group description cannot be left empty!';
$LANGS['groupnoimage'] = 'You must upload an image for your group!';
$LANGS['groupimageerror'] = 'Group images must be under 1MB and be an image file!';
$LANGS['groupcreated'] = 'Group has succesfully been created!';
$LANGS['urlnotvalid'] = "This isn't a valid video URL!";
$LANGS['discussiondeleted'] = 'Topic successfully deleted!';
$LANGS['videodeleted'] = 'Video has successfully been deleted!';
$LANGS['pldeleted'] = 'Playlist has successfully been deleted!';
$LANGS['invitesent'] = 'Friend Invite has successfully been sent!';
$LANGS['descriptionchanged'] = 'The description has been changed!';
$LANGS['emptymessage'] = 'You cannot send empty messages!';
$LANGS['styleupdated'] = 'Group styling has been successfully updated!';
$LANGS['imageupdated'] = 'Group image has been successfully updated!';
$LANGS['plcreated'] = 'Playlist has been successfully created!';
$LANGS['discussiontitle2chars'] = 'Title must be over 2 characters!';
$LANGS['discussiondesc10chars'] = 'Descriptions must be over 10 characters!';
$LANGS['5discussionsday'] = 'You can only make up to 5 discussions a day!';
$LANGS['discussionsuccess'] = 'Discussion successfully created!';
$LANGS['memberaccepted1'] = '';
$LANGS['memberaccepted2'] = 'was successfully accepted!';
$LANGS['memberdeclined1'] = '';
$LANGS['memberdeclined2'] = 'was successfully declined!';
$LANGS['videoaccepted'] = 'The video was successfully accepted!';
$LANGS['bulletindeleted'] = 'Bulletin successfully deleted!';
$LANGS['messagedeleted'] = 'Message successfully deleted!';
$LANGS['responsedeleted'] = 'Successfully deleted Video Response!';
$LANGS['flagmod'] = 'You cannot report user that have moderator permissions!';
$LANGS['userflagged'] = 'Report has been submitted!';
$LANGS['discussionreplysubmitted'] = 'Reply has been successfully sent!';
$LANGS['discussionreplyempty'] = 'A reply cannot be left empty!';

/* Watch */
$LANGS['moreinfo'] = 'més informació';
$LANGS['lessinfo'] = 'menys informació';
$LANGS['category'] = 'Categoria';
$LANGS['recordedon'] = 'Gravat el';
$LANGS['location'] = 'Ubicació';
$LANGS['tags'] = 'Etiquetes';
$LANGS['embed'] = 'Insereix';
$LANGS['partnervideo'] = 'Vídeo de partner';
$LANGS['subscribe'] = 'Subscriu-me';
$LANGS['unsubscribe'] = 'Anul·lar subscripció';
$LANGS['nodesc'] = 'Sense descripció...';
$LANGS['logintosub'] = "Inicia la sessió per subscriure't a aquest canal.";
$LANGS['logintosubbox'] = "Vols subscriure't a aquest canal?";
$LANGS['subyourself'] = 'No et pots subscriure al teu canal!';
$LANGS['videoowner'] = 'Opcions del propietari del vídeo';
$LANGS['editvideo'] = 'Editar vídeo';
$LANGS['insight'] = 'Insight';
$LANGS['morefrom'] = 'Més de:';
$LANGS['relatedvideos'] = 'Vídeos relacionats';
$LANGS['novideosfound'] = "No s'han trobat vídeos...";
$LANGS['morevideos'] = 'Veure tots els vídeos';
$LANGS['changeplayersize'] = 'Canviar tamany del reproductor';
$LANGS['newwindow'] = 'Veure aquest vídeo en una nova finestra';
$LANGS['featuredtext'] = 'Aquest vídeo ha estat destacat. Vols veure més vídeos destacats? <a href="/browse?t=2">Clica aquí</a>.';
$LANGS['ratings'] = 'puntuacions';
$LANGS['rating'] = 'puntuació';
$LANGS['favorite'] = 'Favorit';
$LANGS['addtofav'] = 'Afegir a favorits';
$LANGS['removefav'] = 'Eliminar de favorits';
$LANGS['favadded'] = 'Aquest vídeo ha estat <strong>afegit</strong> als teus <a href="/my_favorites">favorits</a>.';
$LANGS['favremoved'] = 'Aquest vídeo ha estat <strong>eliminat</strong> als teus <a href="/my_favorites">favorits</a>.';
$LANGS['undo'] = 'Desfer';
$LANGS['thanksforrating'] = 'Gràcies per puntuar!';
$LANGS['playlistdesc'] = 'Per a afegir un vídeo a una llista de reproducció, ves a la pàgina de <a href="/my_playlists">"Les meues llistes de reproducció"</a>.';
$LANGS['addtoplaylist'] = 'Afegir a llista de reproducció';
$LANGS['addtoplaylistsuccess'] = "El vídeo s'ha afegit a la teua llista de reproducció.";
$LANGS['share'] = 'Comparteix';
$LANGS['flag'] = 'Marcar';
$LANGS['flagthisvid'] = 'Marcar aquest vídeo';
$LANGS['removeflag'] = 'Desmarcar aquest vídeo';
$LANGS['flagnote'] = "Abans de marcar: assegura't que el vídeo incompleix qualsevol regla. No denuncis només perquè no t'agrada aquest vídeo, en cas contrari estaràs dificultant la feina dels moderadors.";
$LANGS['statadded'] = 'Afegit';
$LANGS['statviews'] = 'Visualitzacions';
$LANGS['statratings'] = 'Puntuacions';
$LANGS['statresponses'] = 'Respostes';
$LANGS['statcomments'] = 'Comentaris';
$LANGS['statfavorited'] = 'Favorits';
$LANGS['statsdata'] = 'Estadístiques i dades';
$LANGS['honors'] = "Guardons d'aquest vídeo";
$LANGS['mostviewed'] = 'Més vistos';
$LANGS['topfavorited'] = 'Superfavorits';
$LANGS['times'] = 'vegades';
$LANGS['mostdiscussed'] = 'Més comentats';
$LANGS['toprated'] = 'Més valorats';
$LANGS['videolinks'] = 'Llocs amb enllaços a aquest vídeo';
$LANGS['clicksfrom'] = 'clics de';
$LANGS['responses'] = 'Respostes en vídeo';
$LANGS['responsespost'] = 'Publica una resposta en vídeo';
$LANGS['textcomments'] = 'Comentaris escrits';
$LANGS['commentpost'] = 'Escriu un comentari';
$LANGS['commentonthisvideo'] = 'Comenta en aquest video';
$LANGS['postcomment'] = 'Publicar comentari';
$LANGS['remainingcounter'] = 'Número de caràcters restants';
$LANGS['nocomments'] = 'Aquest vídeo <b>no té comentaris</b>.';
$LANGS['noresponses'] = 'Aquest vídeo <b>no té respostes</b>.';
$LANGS['commviewall'] = 'Veure els';
$LANGS['delete'] = 'Eliminar';
$LANGS['reply'] = 'Respondre';
$LANGS['commentlogin'] = "T'agradaria comentar?";
$LANGS['commentlogindesc'] = '<a href="/signup">Uneix-te a BitView</a> per obtenir un compte gratuït o <a href="/login">inicia la sessió</a> si ja ets membre.';
$LANGS['logintoresponse'] = 'Inicia la sessió per a publicar una resposta en vídeo';
$LANGS['logintocomment'] = 'Inicia la sessió per a escriure una comentari';
$LANGS['logintofav'] = 'Vols afegir a favorits? <a href="/login">Inicieu la sessió</a> o <a href="/signup">registreu-vos</a> ara!';
$LANGS['logintopl'] = 'Vols afegir a una llista de reproducció? <a href="/login">Inicieu la sessió</a> o <a href="/signup">registreu-vos</a> ara!';
$LANGS['logintoflag'] = 'Vols marcar un vídeo? <a href="/login">Inicieu la sessió</a> o <a href="/signup">registreu-vos</a> ara!';
$LANGS['close'] = 'tancar';
$LANGS['addresponse'] = 'Afegir resposta';
$LANGS['recentlyrated'] = 'Puntuacions recents';
$LANGS['commentsdisabled'] = 'No es poden afegir comentaris sobre aquest vídeo.';
$LANGS['ratingsdisabled'] = 'Puntuacions desactivades';

/* Watch comments */
$LANGS['allcomments'] = 'Tots els comentaris';

/* Sign In */
$LANGS['username'] = "Username";
$LANGS['password'] = "Password";
$LANGS['logindesc'] = "Sign in to BitView with your account";
$LANGS['forgot'] = "Can't access your account?";
$LANGS['forgotmsg'] = 'Please contact us on Twitter (@BitView_) or send a message to the Moderators on the Discord. (link in footer)';
$LANGS['noaccount'] = "Don't have an account?";
$LANGS['signuptobv'] = "Sign up for BitView!";
$LANGS['signintobv'] = "Sign in to BitView!";
$LANGS['signindesc1'] = "Join the largest worldwide video-sharing community!";
$LANGS['signindesc2'] = "BitView is a way to get your videos to the people who matter to you. With BitView you can:";
$LANGS['signindesc3'] = "Show off your favorite videos to the world";
$LANGS['signindesc4'] = "Blog the videos you take with your digital camera or cell phone";
$LANGS['signindesc5'] = "Securely and privately show videos to your friends and family around the world";
$LANGS['notallowed'] = "You've been banned 3 times already. You aren't allowed to use BitView anymore!";
$LANGS['wrongpassword'] = 'Wrong password! Please try again.';
$LANGS['staysigned'] = "Stay signed in";

/* Sign Up */
$LANGS['email'] = "Email Address";
$LANGS['passwordstrength'] = "Password strength";
$LANGS['psnone'] = "None";
$LANGS['psweak'] = "Weak";
$LANGS['psfair'] = "Fair";
$LANGS['psgood'] = "Good";
$LANGS['psstrong'] = "Strong";
$LANGS['repassword'] = "Re-type Password";
$LANGS['usernamedesc'] = "Your username can only contain letters A-Z or numbers 0-9.";
$LANGS['captcha'] = "Captcha";
$LANGS['acceptterms'] = 'I agree to the <a href="/terms">Terms of Use</a> and <a href="/privacy">Privacy Policy</a>.';
$LANGS['copyrighttext'] = 'Uploading materials that you do not own is a copyright violation and against the law. If you upload material you do not own, your account will be deleted.';
$LANGS['mustaccept'] = 'Debes aceptar los Términos de uso y la Política de privacidad para crear tu cuenta.';
$LANGS['createaccount'] = 'Create my account';
$LANGS['signuperror'] = 'There was an error while creating your account.';
$LANGS['sameemail'] = 'This username or email is already in use!';
$LANGS['usernamechar'] = 'Usernames can only contain characters and numbers!';
$LANGS['required'] = 'All text fields are required!';
$LANGS['notmatch'] = "The passwords don't match!";
$LANGS['signuphead'] = 'Get started with your account';

/* Videos Page */
$LANGS['recentvideos'] = 'Vídeos recents';
$LANGS['random'] = 'Aleatori';
$LANGS['dropdownmore'] = 'més';
$LANGS['allcatin'] = 'En';
$LANGS['allcat'] = 'Totes les categories';
$LANGS['categories'] = 'Categories';
$LANGS['nomorevideos'] = "No s'han trobat vídeos...";
$LANGS['timetoday'] = 'Hui';
$LANGS['timeweek'] = 'Aquesta setmana';
$LANGS['timemonth'] = 'Aquest mes';
$LANGS['alltime'] = 'Sempre';
$LANGS['when'] = 'Quan';
$LANGS['videofavorites'] = 'favorits';
$LANGS['videocomments'] = 'comentaris';
$LANGS['trendingtopics'] = 'Tendències';

/* Channels Page */
$LANGS['mostsubscribed'] = 'Més subscrits';
$LANGS['lastlogin'] = 'Últim accés';
$LANGS['cstatviews'] = 'Visualitzacions';
$LANGS['cstatvideos'] = 'Vídeos';
$LANGS['cstatsubs'] = 'Subscriptors';
$LANGS['nochannels'] = "No s'han trobat canals...";

/* Video Categories */
$LANGS['cat1'] = "Film & Animation";
$LANGS['cat2'] = "Autos & Vehicles";
$LANGS['cat3'] = "Education & Instructional";
$LANGS['cat4'] = "Entertainment";
$LANGS['cat5'] = "Events & Weddings";
$LANGS['cat6'] = "Family";
$LANGS['cat7'] = "For Sale & Auctions";
$LANGS['cat8'] = "Hobbies & Interests";
$LANGS['cat9'] = "Humor";
$LANGS['cat10'] = "Music";
$LANGS['cat11'] = "News & Politics";
$LANGS['cat12'] = "Odd & Outragous";
$LANGS['cat13'] = "People & Blogs";
$LANGS['cat14'] = "Personals & Dating";
$LANGS['cat15'] = "Pets & Animals";
$LANGS['cat16'] = "Science & Technology";
$LANGS['cat17'] = "Short Movies";
$LANGS['cat18'] = "Sports";
$LANGS['cat19'] = "Travel & Events";
$LANGS['cat20'] = "Gaming";
$LANGS['cat21'] = "Videoblogging";

/* Channel Types */
$LANGS['type0'] = "None";
$LANGS['type1'] = "Member";
$LANGS['type1p'] = "Members";
$LANGS['type2'] = "Comedian";
$LANGS['type2p'] = "Comedians";
$LANGS['type3'] = "Director";
$LANGS['type3p'] = "Directors";
$LANGS['type4'] = "Guru";
$LANGS['type4p'] = "Gurus";
$LANGS['type5'] = "Musician";
$LANGS['type5p'] = "Musicians";
$LANGS['type6'] = "Reporter";
$LANGS['type6p'] = "Reporters";

/* Countries */
$LANGS['cat_AF'] = "Afghanistan";
$LANGS['cat_AX'] = "Åland Islands";
$LANGS['cat_AL'] = "Albania";
$LANGS['cat_DZ'] = "Algeria";
$LANGS['cat_AS'] = "American Samoa";
$LANGS['cat_AD'] = "Andorra";
$LANGS['cat_AO'] = "Angola";
$LANGS['cat_AI'] = "Anguilla";
$LANGS['cat_AQ'] = "Antarctica";
$LANGS['cat_AG'] = "Antigua and Barbuda";
$LANGS['cat_AR'] = "Argentina";
$LANGS['cat_AM'] = "Armenia";
$LANGS['cat_AW'] = "Aruba";
$LANGS['cat_AU'] = "Australia";
$LANGS['cat_AT'] = "Austria";
$LANGS['cat_AZ'] = "Azerbaijan";
$LANGS['cat_BS'] = "Bahamas";
$LANGS['cat_BH'] = "Bahrain";
$LANGS['cat_BD'] = "Bangladesh";
$LANGS['cat_BB'] = "Barbados";
$LANGS['cat_BY'] = "Belarus";
$LANGS['cat_BE'] = "Belgium";
$LANGS['cat_BZ'] = "Belize";
$LANGS['cat_BJ'] = "Benin";
$LANGS['cat_BM'] = "Bermuda";
$LANGS['cat_BT'] = "Bhutan";
$LANGS['cat_BO'] = "Bolivia";
$LANGS['cat_BQ'] = "Caribbean Netherlands";
$LANGS['cat_BA'] = "Bosnia and Herzegovina";
$LANGS['cat_BW'] = "Botswana";
$LANGS['cat_BV'] = "Bouvet Island";
$LANGS['cat_BR'] = "Brazil";
$LANGS['cat_IO'] = "British Indian Ocean Territory";
$LANGS['cat_BN'] = "Brunei Darussalam";
$LANGS['cat_BG'] = "Bulgaria";
$LANGS['cat_BF'] = "Burkina Faso";
$LANGS['cat_BI'] = "Burundi";
$LANGS['cat_KH'] = "Cambodia";
$LANGS['cat_CM'] = "Cameroon";
$LANGS['cat_CA'] = "Canada";
$LANGS['cat_CV'] = "Cape Verde";
$LANGS['cat_KY'] = "Cayman Islands";
$LANGS['cat_CF'] = "Central African Republic";
$LANGS['cat_TD'] = "Chad";
$LANGS['cat_CL'] = "Chile";
$LANGS['cat_CN'] = "China";
$LANGS['cat_CX'] = "Christmas Island";
$LANGS['cat_CC'] = "Cocos (Keeling) Islands";
$LANGS['cat_CO'] = "Colombia";
$LANGS['cat_KM'] = "Comoros";
$LANGS['cat_CG'] = "Republic of the Congo";
$LANGS['cat_CD'] = "Democratic Republic of the Congo";
$LANGS['cat_CK'] = "Cook Islands";
$LANGS['cat_CR'] = "Costa Rica";
$LANGS['cat_CI'] = "Côte d'Ivoire";
$LANGS['cat_HR'] = "Croatia";
$LANGS['cat_CU'] = "Cuba";
$LANGS['cat_CW'] = "Curaçao";
$LANGS['cat_CY'] = "Cyprus";
$LANGS['cat_CZ'] = "Czech Republic";
$LANGS['cat_DK'] = "Denmark";
$LANGS['cat_DJ'] = "Djibouti";
$LANGS['cat_DM'] = "Dominica";
$LANGS['cat_DO'] = "Dominican Republic";
$LANGS['cat_EC'] = "Ecuador";
$LANGS['cat_EG'] = "Egypt";
$LANGS['cat_SV'] = "El Salvador";
$LANGS['cat_GQ'] = "Equatorial Guinea";
$LANGS['cat_ER'] = "Eritrea";
$LANGS['cat_EE'] = "Estonia";
$LANGS['cat_ET'] = "Ethiopia";
$LANGS['cat_FK'] = "Falkland Islands (Malvinas)";
$LANGS['cat_FO'] = "Faroe Islands";
$LANGS['cat_FJ'] = "Fiji";
$LANGS['cat_FI'] = "Finland";
$LANGS['cat_FR'] = "France";
$LANGS['cat_GF'] = "French Guiana";
$LANGS['cat_FG'] = "French Guiana";
$LANGS['cat_PF'] = "French Polynesia";
$LANGS['cat_TF'] = "French Southern Territories";
$LANGS['cat_GA'] = "Gabon";
$LANGS['cat_GM'] = "Gambia";
$LANGS['cat_GE'] = "Georgia";
$LANGS['cat_DE'] = "Germany";
$LANGS['cat_GH'] = "Ghana";
$LANGS['cat_GI'] = "Gibraltar";
$LANGS['cat_GR'] = "Greece";
$LANGS['cat_GL'] = "Greenland";
$LANGS['cat_GD'] = "Grenada";
$LANGS['cat_GP'] = "Guadalupe";
$LANGS['cat_GU'] = "Guam";
$LANGS['cat_GT'] = "Guatemala";
$LANGS['cat_GG'] = "Guernsey";
$LANGS['cat_GN'] = "Guinea";
$LANGS['cat_GW'] = "Guinea-Bissau";
$LANGS['cat_GY'] = "Guyana";
$LANGS['cat_HT'] = "Haiti";
$LANGS['cat_HM'] = "Heard Island and McDonald Islands";
$LANGS['cat_VA'] = "Holy See (Vatican City State)";
$LANGS['cat_HN'] = "Honduras";
$LANGS['cat_HK'] = "Hong Kong";
$LANGS['cat_HU'] = "Hungary";
$LANGS['cat_IS'] = "Iceland";
$LANGS['cat_IN'] = "India";
$LANGS['cat_ID'] = "Indonesia";
$LANGS['cat_IR'] = "Iran";
$LANGS['cat_IQ'] = "Iraq";
$LANGS['cat_IE'] = "Ireland";
$LANGS['cat_IM'] = "Isle of Man";
$LANGS['cat_IL'] = "Israel";
$LANGS['cat_IT'] = "Italy";
$LANGS['cat_JM'] = "Jamaica";
$LANGS['cat_JP'] = "Japan";
$LANGS['cat_JE'] = "Jersey";
$LANGS['cat_JO'] = "Jordan";
$LANGS['cat_KZ'] = "Kazakhstan";
$LANGS['cat_KE'] = "Kenya";
$LANGS['cat_KI'] = "Kiribati";
$LANGS['cat_XK'] = "Kosovo";
$LANGS['cat_KP'] = "North Korea";
$LANGS['cat_KR'] = "South Korea";
$LANGS['cat_KW'] = "Kuwait";
$LANGS['cat_KG'] = "Kyrgyzstan";
$LANGS['cat_LA'] = "Laos";
$LANGS['cat_LV'] = "Latvia";
$LANGS['cat_LB'] = "Lebanon";
$LANGS['cat_LS'] = "Lesotho";
$LANGS['cat_LR'] = "Liberia";
$LANGS['cat_LY'] = "Libya";
$LANGS['cat_LI'] = "Liechtenstein";
$LANGS['cat_LT'] = "Lithuania";
$LANGS['cat_LU'] = "Luxembourg";
$LANGS['cat_MO'] = "Macao";
$LANGS['cat_MK'] = "North Macedonia";
$LANGS['cat_MG'] = "Madagascar";
$LANGS['cat_MW'] = "Malawi";
$LANGS['cat_MY'] = "Malaysia";
$LANGS['cat_MV'] = "Maldives";
$LANGS['cat_ML'] = "Mali";
$LANGS['cat_MT'] = "Malta";
$LANGS['cat_MH'] = "Marshall Islands";
$LANGS['cat_MQ'] = "Martinique";
$LANGS['cat_MR'] = "Mauritania";
$LANGS['cat_MU'] = "Mauritius";
$LANGS['cat_YT'] = "Mayotte";
$LANGS['cat_MX'] = "Mexico";
$LANGS['cat_FM'] = "Micronesia";
$LANGS['cat_MD'] = "Moldova";
$LANGS['cat_MC'] = "Monaco";
$LANGS['cat_MN'] = "Mongolia";
$LANGS['cat_ME'] = "Montenegro";
$LANGS['cat_MS'] = "Montserrat";
$LANGS['cat_MA'] = "Morocco";
$LANGS['cat_MZ'] = "Mozambique";
$LANGS['cat_MM'] = "Myanmar";
$LANGS['cat_NA'] = "Namibia";
$LANGS['cat_NR'] = "Nauru";
$LANGS['cat_NP'] = "Nepal";
$LANGS['cat_NL'] = "Netherlands";
$LANGS['cat_AN'] = "Netherlands Antilles";
$LANGS['cat_NC'] = "New Caledonia";
$LANGS['cat_NZ'] = "New Zealand";
$LANGS['cat_NI'] = "Nicaragua";
$LANGS['cat_NE'] = "Niger";
$LANGS['cat_NG'] = "Nigeria";
$LANGS['cat_NU'] = "Niue";
$LANGS['cat_NF'] = "Norfolk Island";
$LANGS['cat_MP'] = "Northern Mariana Islands";
$LANGS['cat_NO'] = "Norway";
$LANGS['cat_OM'] = "Oman";
$LANGS['cat_PK'] = "Pakistan";
$LANGS['cat_PW'] = "Palau";
$LANGS['cat_PS'] = "Palestine";
$LANGS['cat_PA'] = "Panama";
$LANGS['cat_PG'] = "Papua New Guinea";
$LANGS['cat_PY'] = "Paraguay";
$LANGS['cat_PE'] = "Peru";
$LANGS['cat_PH'] = "Philippines";
$LANGS['cat_PN'] = "Pitcairn";
$LANGS['cat_PL'] = "Poland";
$LANGS['cat_PT'] = "Portugal";
$LANGS['cat_PR'] = "Puerto Rico";
$LANGS['cat_QA'] = "Qatar";
$LANGS['cat_RE'] = "Réunion";
$LANGS['cat_RO'] = "Romania";
$LANGS['cat_RU'] = "Russia";
$LANGS['cat_RW'] = "Rwanda";
$LANGS['cat_BL'] = "Saint Barthélemy";
$LANGS['cat_SH'] = "Saint Helena";
$LANGS['cat_KN'] = "Saint Kitts and Nevis";
$LANGS['cat_LC'] = "Saint Lucia";
$LANGS['cat_MF'] = "Saint Martin (French part)";
$LANGS['cat_PM'] = "Saint Pierre and Miquelon";
$LANGS['cat_VC'] = "Saint Vincent and the Grenadines";
$LANGS['cat_WS'] = "Samoa";
$LANGS['cat_SM'] = "San Marino";
$LANGS['cat_ST'] = "Sao Tome and Principe";
$LANGS['cat_SA'] = "Saudi Arabia";
$LANGS['cat_SN'] = "Senegal";
$LANGS['cat_RS'] = "Serbia";
$LANGS['cat_SC'] = "Seychelles";
$LANGS['cat_SL'] = "Sierra Leone";
$LANGS['cat_SG'] = "Singapore";
$LANGS['cat_SX'] = "Sint Maarten";
$LANGS['cat_SK'] = "Slovakia";
$LANGS['cat_SI'] = "Slovenia";
$LANGS['cat_SB'] = "Solomon Islands";
$LANGS['cat_SO'] = "Somalia";
$LANGS['cat_ZA'] = "South Africa";
$LANGS['cat_GS'] = "South Georgia and the South Sandwich Islands";
$LANGS['cat_ES'] = "Spain";
$LANGS['cat_LK'] = "Sri Lanka";
$LANGS['cat_SD'] = "Sudan";
$LANGS['cat_SR'] = "Suriname";
$LANGS['cat_SJ'] = "Svalbard and Jan Mayen";
$LANGS['cat_SZ'] = "Swaziland";
$LANGS['cat_SE'] = "Sweden";
$LANGS['cat_CH'] = "Switzerland";
$LANGS['cat_SS'] = "South Sudan";
$LANGS['cat_SY'] = "Syria";
$LANGS['cat_TW'] = "Taiwan";
$LANGS['cat_TJ'] = "Tajikistan";
$LANGS['cat_TZ'] = "Tanzania";
$LANGS['cat_TH'] = "Thailand";
$LANGS['cat_TL'] = "Timor-Leste";
$LANGS['cat_TG'] = "Togo";
$LANGS['cat_TK'] = "Tokelau";
$LANGS['cat_TO'] = "Tonga";
$LANGS['cat_TT'] = "Trinidad and Tobago";
$LANGS['cat_TN'] = "Tunisia";
$LANGS['cat_TR'] = "Turkey";
$LANGS['cat_TM'] = "Turkmenistan";
$LANGS['cat_TC'] = "Turks and Caicos Islands";
$LANGS['cat_TV'] = "Tuvalu";
$LANGS['cat_UG'] = "Uganda";
$LANGS['cat_UA'] = "Ukraine";
$LANGS['cat_AE'] = "United Arab Emirates";
$LANGS['cat_GB'] = "United Kingdom";
$LANGS['cat_US'] = "United States";
$LANGS['cat_UM'] = "United States Minor Outlying Islands";
$LANGS['cat_UY'] = "Uruguay";
$LANGS['cat_UZ'] = "Uzbekistan";
$LANGS['cat_VU'] = "Vanatu";
$LANGS['cat_VE'] = "Venezuela";
$LANGS['cat_VN'] = "Vietnam";
$LANGS['cat_VG'] = "Virgin Islands, British";
$LANGS['cat_VI'] = "Virgin Islands, U.S.";
$LANGS['cat_WF'] = "Wallis and Futuna";
$LANGS['cat_EH'] = "Western Sahara";
$LANGS['cat_YE'] = "Yemen";
$LANGS['cat_ZM'] = "Zambia";
$LANGS['cat_ZW'] = "Zimbabwe";

/* My Subscriptions */
$LANGS['newvideos'] = "New Videos";

/* Account */
$LANGS['myaccount'] = "My Account";
$LANGS['vidsfavs'] = "Videos, Favorites and Playlists";
$LANGS['accountsettings'] = "Account Settings";
$LANGS['viewinghistory'] = "History";
$LANGS['mychannel'] = "My Channel";
$LANGS['uploadedvideos'] = "Uploaded Videos";
$LANGS['new'] = "New";
$LANGS['playlist'] = "Playlist";
$LANGS['videoupload'] = "Video Upload";
$LANGS['nosubvideos'] = "You have no subscriptions...";
$LANGS['nofavvideos'] = "You haven't favorited any video...";

/* My Videos */
$LANGS['sortby'] = "Sort by";
$LANGS['sorttitle'] = "Title";
$LANGS['sorttime'] = "Time";
$LANGS['sortdateadded'] = "Date Added";
$LANGS['sortviews'] = "Views";
$LANGS['sortrating'] = "Rating";
$LANGS['stattime'] = "Time";
$LANGS['statrating'] = "Rating";
$LANGS['statbroadcast'] = "Broadcast";
$LANGS['statrawfile'] = "Raw File";
$LANGS['public'] = "Public";
$LANGS['private'] = "Private";
$LANGS['live'] = "Live!";
$LANGS['converting'] = "Converting...";
$LANGS['uploading'] = "Uploading...";
$LANGS['addvidsto'] = "Add Videos to";
$LANGS['play'] = "Play";
$LANGS['edit'] = "Edit";
$LANGS['setasavatar'] = "Set Thumbnail as Avatar";
$LANGS['downloadmp4'] = "Download MP4";
$LANGS['deleteconfirmation'] = "Are you sure you want to delete this video?";
$LANGS['novideos'] = 'You have not uploaded any videos. <a href="/my_videos_upload">Start uploading a video now</a>!';
$LANGS['nomyvideosresults'] = "No results. Check if your spelling is correct.";

/* Edit Video */
$LANGS['title'] = "Title";
$LANGS['desc'] = "Description";
$LANGS['privacy'] = "Privacy";
$LANGS['saveinfo'] = "Save Info";
$LANGS['saveinfoconfirm'] = "Are you sure you want to change the video information?";
$LANGS['viewchart'] = "View Chart";
$LANGS['backtopreviouspage'] = "Back to Previous Page";
$LANGS['editsavechanges'] = "Save Changes";
$LANGS['editcancel'] = "cancel";
$LANGS['videoinfo'] = "Video Information";
$LANGS['videothumbnail'] = "Video Thumbnail";
$LANGS['uploadthumbnail'] = "Upload Thumbnail";
$LANGS['customthumbdesc'] = 'To set a custom thumbnail, click the thumbnail on the left side and select your desired image file. Then, click "Upload Thumbnail".';
$LANGS['customthumbtitle'] = 'Do you want to change this thumbnail?';
$LANGS['customthumbinfo'] = 'Custom thumbnails are exclusive to partners. To read more about the advantages of joining the partner program and its requirements, click the button below.';
$LANGS['partnerreadmore'] = 'Read more';
$LANGS['broadcastingoptions'] = 'Broadcasting and Sharing Options';
$LANGS['publicdesc'] = "anyone can search for and view - recommended";
$LANGS['privatedesc'] = "only specific BitView users can view";
$LANGS['allowcomments'] = "Allow comments automatically";
$LANGS['allowfriendcomments'] = "Only friends can comment";
$LANGS['disablecomments'] = "Don't allow comments";
$LANGS['dateandmap'] = "Date and Map";
$LANGS['clear'] = "Clear";
$LANGS['allowratings'] = "Yes, allow this video to be rated by others.";
$LANGS['dontallowratings'] = "No, don't allow this video to be rated.";

/* My Playlists */
$LANGS['addedpl'] = "Added";
$LANGS['frompl'] = "From";
$LANGS['nopl'] = "No Playlists were found....";

/* My Playlist */
$LANGS['playlistedit'] = "Edit Playlist";
$LANGS['videourl'] = "Video URL";
$LANGS['add'] = "Add";
$LANGS['editinfo'] = "Edit Info";

/* Edit Playlist */
$LANGS['pledittitle'] = "Edit Playlist";
$LANGS['pleditdesc'] = "Playlists are collection of videos which you can set up the way you want.";
$LANGS['cancel'] = "Cancel·lar";

/* Create Playlist */
$LANGS['createplaylisttitle'] = "Create Video Playlist";
$LANGS['createplaylist'] = "Create Playlist";

/* View Playlist */
$LANGS['plpermalink'] = "Playlist/URL (Permalink):";
$LANGS['sortcomments'] = "Comments";
$LANGS['unsorted'] = "Unsorted";
$LANGS['playallvideos'] = "Play All Videos";

/* Inbox */
$LANGS['compose'] = "Compose";
$LANGS['from'] = "From";
$LANGS['subject'] = "Subject";
$LANGS['date'] = "Date";
$LANGS['allmsg'] = "All Messages";
$LANGS['msgcom'] = "Comments";
$LANGS['sentmsg'] = "Sent Messages";
$LANGS['nomsg'] = "You have no Messages...";


/* Send Message */
$LANGS['messagecont'] = "Message";
$LANGS['to'] = "To";
$LANGS['sendmessagebutton'] = "Send Message";

/* Groups */
$LANGS['groups'] = "Groups";
$LANGS['joinedgroups'] = "Joined Groups";
$LANGS['recentgroups'] = "Recent Groups";
$LANGS['mostmembers'] = "Most Members";
$LANGS['mostvideos'] = "Most Videos";
$LANGS['groupmostdiscussed'] = "Most Discussed";
$LANGS['createagroup'] = "Create a Group";
$LANGS['groupvideos'] = "Videos";
$LANGS['groupmembers'] = "Members";
$LANGS['discussions'] = "Discussions";
$LANGS['groupcreated'] = "Created";
$LANGS['nogroups'] = "No Groups found...";

/* Group */
$LANGS['jointhisgroup'] = "Join This Group";
$LANGS['removerequest'] = "Remove Request";
$LANGS['leavegroup'] = "Leave Group";
$LANGS['moderation'] = "Moderation";
$LANGS['viewallvideos'] = "View All Videos";
$LANGS['addvideo'] = "Add Video";
$LANGS['novideos'] = "No Videos...";
$LANGS['nodiscussions'] = "No Discussions...";
$LANGS['creatediscussion'] = "Create Discussion";
$LANGS['topostatopic'] = "to post a topic.";
$LANGS['topic'] = "Topic";
$LANGS['author'] = "Author";
$LANGS['replies'] = "Replies";
$LANGS['lastpost'] = "Last Post";
$LANGS['viewallmembers'] = "View All Members";
$LANGS['owner'] = "Owner";
$LANGS['grouptype'] = "Type";
$LANGS['instantjoin'] = "Instant Join";
$LANGS['approvalrequired'] = "Approval Required";
$LANGS['groupurl'] = "URL";
$LANGS['deletediscussion'] = "Delete Discussion";
$LANGS['postreply'] = "Post Reply";
$LANGS['post'] = "Post";
$LANGS['accept'] = "Acceptar";
$LANGS['decline'] = "Decline";

/* Group Moderation */
$LANGS['groupmoderation'] = "Group Moderation";
$LANGS['approvemembers'] = "Approve Members";
$LANGS['approvevideos'] = "Approve Videos";
$LANGS['yes'] = "Yes";
$LANGS['no'] = "No";
$LANGS['changeinfo'] = "Change Info";
$LANGS['changeimage'] = "Change Image";
$LANGS['image'] = "Image";
$LANGS['styling'] = "Styling";
$LANGS['cssdesc'] = "Having backgrounds or graphics that do or show illegal things will result in your termination.";
$LANGS['updatecss'] = "Update CSS";
$LANGS['groupmessage'] = "Message";
$LANGS['sendmessagetomembers'] = "Send Message to Members";
$LANGS['delgroup'] = "Delete Group";

/* Submit Group Video */
$LANGS['submitvideotitle'] = "Submit Video to Group";
$LANGS['submitvideo'] = "Submit Video";

/* Create Group */
$LANGS['groupname'] = "Group Name";
$LANGS['groupimage'] = "Group Image";
$LANGS['creategroup'] = "Create Group";
$LANGS['creategroupdesc'] = "Groups allow you to create discussions with other members and easily share your videos with others.";

/* Create Group Discussion */
$LANGS['discussiontitle'] = "Discussion Title";
$LANGS['creatediscussiondesc'] = "Discussions are parts of groups in which you discuss the set topic.";

/* Search Results */
$LANGS['resultspre'] = ""; /* Explanation: Use if the search query goes before "results". Example: "Resultados para search" in Spanish. If your language doesn't use this, leave it empty like this: ''*/
$LANGS['resultspost'] = "results"; /* Explanation: Use if "BitView" goes after the username. Example: "search results" in English. If your language doesn't use this, leave it empty like this: '' */
$LANGS['relevance'] = 'Relevance';
$LANGS['viewcount'] = 'View Count';
$LANGS['searchrating'] = 'Rating';
$LANGS['newest'] = 'Newest';
$LANGS['nochannelsfound'] = 'No Channels Found...';
$LANGS['noplfound'] = 'No Playlists Found...';
$LANGS['nogroupsfound'] = 'No Groups Found...';

/* Profile */
$LANGS['channelsuspended'] = 'This account is suspended.';
$LANGS['accountnotfound'] = 'This account could not be found.';
$LANGS['channel'] = 'Channel';
$LANGS['friends'] = 'Friends';
$LANGS['channelsubscribers'] = 'Subscribers';
$LANGS['linkcomments'] = 'Comments';
$LANGS['bulletins'] = 'Bulletins';
$LANGS['editchannel'] = 'Edit Channel';
$LANGS['type'] = 'Type';
$LANGS['joined'] = 'Joined';
$LANGS['videoswatched'] = 'Videos Watched';
$LANGS['channelviews'] = 'Channel Views';
$LANGS['age'] = 'Age';
$LANGS['gender'] = 'Gender';
$LANGS['male'] = 'Male';
$LANGS['female'] = 'Female';
$LANGS['status'] = 'Status';
$LANGS['single_m'] = 'Single';
$LANGS['single_f'] = 'Single';
$LANGS['taken_m'] = 'Taken';
$LANGS['taken_f'] = 'Taken';
$LANGS['married_m'] = 'Married';
$LANGS['married_f'] = 'Married';
$LANGS['country'] = 'Country';
$LANGS['website'] = 'Website';
$LANGS['hobbies'] = 'Interests and Hobbies';
$LANGS['music'] = 'Music';
$LANGS['movies'] = 'Movies and Shows';
$LANGS['books'] = 'Books';
$LANGS['mostsub'] = 'Most Subscribed';
$LANGS['report'] = 'Report';
$LANGS['pfpviolation'] = 'profile image violation';
$LANGS['connectwith'] = 'Connect with';
$LANGS['profilesendmessage'] = 'Send Message';
$LANGS['messagetoyourself'] = 'You cannot send messages to yourself!';
$LANGS['logintomessage'] = 'Please log in to send messages!';
$LANGS['addcomment'] = 'Add Comment';
$LANGS['logintocommentchannel'] = 'Please log in to comment';
$LANGS['sharechannel'] = 'Share Channel';
$LANGS['addfriend'] = 'Add as Friend';
$LANGS['retractinvite'] = 'Retract Invite';
$LANGS['removefriend'] = 'Remove Friend';
$LANGS['notfriendyourself'] = 'You cannot add yourself to friends!';
$LANGS['logintofriend'] = 'Please log in to add friends!';
$LANGS['blockuser'] = 'Block User';
$LANGS['channelembed'] = 'Embed This Channel';
$LANGS['recentratings'] = 'Recent Activity';
$LANGS['seeall'] = 'see all';
$LANGS['writebulletin'] = 'Write Bulletin';
$LANGS['bulletin'] = 'Bulletin';
$LANGS['subvideos1'] = 'Subscribe to ';
$LANGS['subvideos2'] = "'s videos";
$LANGS['plvideos'] = 'Videos';
$LANGS['playall'] = 'Play All';
$LANGS['featuredchannels'] = 'Featured Channels';
$LANGS['channelcomments'] = 'Channel Comments';
$LANGS['bggraphic'] = 'background graphic';
$LANGS['reportthisuser'] = 'this user.';
$LANGS['norecentratings'] = 'No Recent Activity found...';
$LANGS['nosubscribers'] = 'No Subscribers...';
$LANGS['nosubscriptions'] = 'No Subscriptions...';
$LANGS['nofriends'] = 'No Friends...';
$LANGS['nobulletins'] = 'No Bulletins...';
$LANGS['novideoschannel'] = 'No Videos...';
$LANGS['nofavs'] = 'No Favorite Videos...';
$LANGS['noplchannel'] = 'No Playlists...';
$LANGS['pvideos'] = 'Private Videos';
$LANGS['pvideosallow'] = 'You are not allowed to see these videos...';
$LANGS['plvideoamount'] = 'videos';
$LANGS['bulletinpost'] = 'Bulletin Post';
$LANGS['deletebulletin'] = 'Delete Bulletin';
$LANGS['body'] = 'Body';
$LANGS['bulletincomments'] = 'Bulletin Comments';
$LANGS['tocommentbulletin'] = 'to post a reply to this bulletin!';
$LANGS['addacomment'] = 'Add a Comment:';
$LANGS['postreplychannel'] = 'Post Reply';
$LANGS['writecomment'] = 'Write Comment';
$LANGS['for'] = 'for';
$LANGS['commentdesc'] = 'Channel comments appear on the users channel.';
$LANGS['postbulletin'] = 'Post Bulletin';
$LANGS['writeabulletin'] = 'Write a bulletin';
$LANGS['bulletindesc'] = 'Bulletins appear on your own and your friends channel pages.';
$LANGS['sharingoptions'] = 'Sharing Options';
$LANGS['sharingoptionsdesc'] = 'There are 2 ways to share this channel.';
$LANGS['sharingoptions1'] = '1. Copy & Paste this link into an email or instant message.';
$LANGS['sharingoptions2'] = "2. Send this channel using your computer's email program.";
$LANGS['clicktosend'] = 'Click to send!';
$LANGS['honorless'] = 'less';
$LANGS['activitycomment'] = 'commented on';
$LANGS['activityfavorite'] = 'favorited a video';
$LANGS['activityrating'] = 'rated a video:';
$LANGS['activityupload'] = 'uploaded a new video';
$LANGS['activityfriend'] = 'became friends with';
$LANGS['activitysubscription'] = 'subscribed to';

/* My Profile page */
$LANGS['myprofiledesc'] = 'This page contains all of the settings for your BitView channel.';
$LANGS['profileimages'] = 'Profile Pictures';
$LANGS['avatar'] = 'Avatar';
$LANGS['backgroundimage'] = 'Background Image';
$LANGS['deleteimage'] = 'Delete Image';
$LANGS['channelinformation'] = 'Channel Information';
$LANGS['genderrelationprivate'] = 'Private';
$LANGS['fctitle'] = 'F.C. Title';
$LANGS['relationship'] = 'Relationship';
$LANGS['birthday'] = 'Birthday';
$LANGS['showage'] = 'Show Age';
$LANGS['aboutme'] = 'About Me';
$LANGS['emailprefs'] = 'E-Mail Preferences';
$LANGS['emailpm'] = 'E-Mail me on Private Messages';
$LANGS['emailcomm'] = 'E-Mail me on Video Comments';
$LANGS['emailsub'] = 'E-Mail me on weekly Subscription Highlights';
$LANGS['layoutprefs'] = 'Layout Preferences';
$LANGS['bgcolor'] = 'Background Color';
$LANGS['bgfixed'] = 'Fixed';
$LANGS['bgrepeat'] = 'Repeat';
$LANGS['norepeat'] = 'No Repeat';
$LANGS['repeat'] = 'Repeat';
$LANGS['repeatx'] = 'Repeat X';
$LANGS['repeaty'] = 'Repeat Y';
$LANGS['bgposition'] = 'Position';
$LANGS['top'] = 'Top';
$LANGS['middle'] = 'Middle';
$LANGS['bottom'] = 'Bottom';
$LANGS['fontcolor'] = 'Font Color';
$LANGS['titlefontcolor'] = 'Title Font Color';
$LANGS['linkcolor'] = 'Link Color';
$LANGS['hlfontcolor'] = 'Highlight Font Color';
$LANGS['hlheadercolor'] = 'Highlight Header';
$LANGS['hlinsidecolor'] = 'Highlight Inside';
$LANGS['headercolor'] = 'Regular Header';
$LANGS['insidecolor'] = 'Regular Inside';
$LANGS['font'] = 'Channel Font';
$LANGS['featuredvideobox'] = 'Featured Video Box';
$LANGS['subscribersbox'] = 'Subscribers Box';
$LANGS['subscriptionsbox'] = 'Subscriptions Box';
$LANGS['friendsbox'] = 'Friends Box';
$LANGS['bulletinsbox'] = 'Bulletins Box';
$LANGS['videosbox'] = 'Videos Box';
$LANGS['favoritesbox'] = 'Favorites Box';
$LANGS['playlistsbox'] = 'Playlists Box';
$LANGS['commentsbox'] = 'Comments Box';
$LANGS['ratingsbox'] = 'Recent Activity Box';
$LANGS['partnersettings'] = 'Partner Settings';
$LANGS['bannerimage'] = 'Banner Image';
$LANGS['minibannerimage'] = 'Mini Banner Image';
$LANGS['sideimage'] = 'Side Image';
$LANGS['recommendedsize'] = 'recommended size';
$LANGS['bannerlink'] = 'Banner Website';
$LANGS['sideimagelink'] = 'Side Image Website';
$LANGS['custombox'] = 'Custom Box';
$LANGS['customboxtitle'] = 'Custom Box Title';
$LANGS['customboxcontent'] = 'Custom Box Content';
$LANGS['savechanges'] = 'Save Changes';
$LANGS['submitimage'] = 'Submit Image';

/* Upload page */
$LANGS['uploadpagetitle'] = 'Video Upload';
$LANGS['step1of2'] = 'Step 1 of 2';
$LANGS['step2of2'] = 'Step 2 of 2';
$LANGS['videocategory'] = 'Video Category';
$LANGS['tagsdesc'] = 'Tags are keywords used to help people find your video.<br> <i>(comma separated)</i>';
$LANGS['requiredfield'] = '(* indicates required field)';
$LANGS['datemapoptions'] = 'Date and Map Options';
$LANGS['optional'] = '(optional)';
$LANGS['chooseoptions'] = 'choose options';
$LANGS['lessoptions'] = 'less options';
$LANGS['addressrecorded'] = 'Address Recorded';
$LANGS['uploadcontinue'] = 'Upload a video...';
$LANGS['file'] = 'File';
$LANGS['broadcastoptions'] = 'Broadcast Options';
$LANGS['uploadvideo'] = 'Upload Video';
$LANGS['needfilevideotoupload'] = 'Please select a video file to upload!';
$LANGS['aboutuploading'] = 'About uploading...';
$LANGS['uploaddesc1'] = 'Uploads usually take 1-5 minutes per MB on a high-speed connection, and converting your video takes a few minutes.';
$LANGS['videolimit1'] = 'Your video is limited to 100MB - maximum video length is 15 minutes.';
$LANGS['videolimit2'] = 'Your video is limited to 2GB - maximum video length is 15 minutes.';
$LANGS['partnervideolimit1'] = 'Your video is limited to 100MB - maximum video length is 30 minutes.';
$LANGS['partnervideolimit2'] = 'Your video is limited to 2GB - maximum video length is 30 minutes.';
$LANGS['myvideosdesc'] = 'After uploading you can edit or remove this video at anytime under the "<a href="/my_videos">My Videos</a>" link on the top of the page.';
$LANGS['newuploader'] = 'Use the new video uploader';
$LANGS['olduploader'] = 'Use the old video uploader';
$LANGS['videoadded'] = 'Your video was successfully added!';
$LANGS['videoaddeddesc'] = 'Your video is currently being processed and will be available to view in a few minutes.';
$LANGS['thankyou'] = 'Thank You';
$LANGS['sharelink'] = 'Share your video link! Copy and paste below:';
$LANGS['embedlink'] = 'Play this video directly ON your website! Copy and paste the following snippet:';
$LANGS['allrequiredinfo'] = 'Please fill all required fields!';

/* Partners */
$LANGS['partnerhead'] = 'Partnerships';
$LANGS['partnertitle'] = 'Partner With BitView';
$LANGS['partnerdesc'] = "You've got great videos and a growing audience. Let BitView help you take it to the next level through our Partner Program.";
$LANGS['applynow'] = 'Apply now';
$LANGS['contentpartners'] = 'Content Partners';
$LANGS['partnerbenefits'] = 'Partner Benefits';
$LANGS['partnerbenefitsdesc'] = 'There are many benefits to becoming a BitView Partner. Some of them include:<br><br>- Branding: make yourself stand out with custom branding, which includes banners, a custom box for your channel and a partner badge on all your videos.<br><br>- There are more benefits to come in the future!';
$LANGS['qualificationsfaq'] = 'Qualifications & FAQ';
$LANGS['qualificationsfaqdesc'] = 'To qualify for the BitView Partner program, you must meet some minimum criteria:<br><br>- You create original videos suitable for online streaming.<br><br>- You have >75 subscribers.<br><br>- Your account does not break any <a href="/guidelines">Community Guidelines.</a>';

/* Staff */
$LANGS['bvstaff'] = 'BitView Staff';
$LANGS['bvstaffdesc'] = "This is a list of people who worked (or still works) on BitView - keeping the website' alive - so users can Express Themselves.";
$LANGS['owners'] = 'Owners';
$LANGS['ownerdesc'] = 'People who - what a shocking fact - owns the BitView thingy.';
$LANGS['coowndev'] = 'Co-Owner & <br> Developer';
$LANGS['owndev'] = 'Owner & <br> Developer';
$LANGS['coownserver'] = 'Co-Owner &<br>Server Owner/Developer';
$LANGS['modsanddevs'] = 'Moderators and Developers';
$LANGS['modsanddevsdesc'] = 'People who keep the website safe and clear. Have any problem with your account? You should contact them.';
$LANGS['moderator'] = 'Moderator';
$LANGS['moddev'] = 'Developer &<br>Moderator';
$LANGS['lettertitle'] = 'Letter to all the people who helped with the website';
$LANGS['letter'] = "Dear Co-Owners, Developers, and Moderators of BitView,<br><br>
                On behalf of the entire BitView team, I would like to express my heartfelt gratitude for your exceptional dedication and hard work. As one of the owners, it fills me with immense pride to witness the growth and success of our video-sharing platform, and it would not have been possible without your invaluable contributions.
                <br><br>
                To rest of the Co-Owners, thank you for your unwavering support and vision. Your commitment to the platform's development and improvement has been instrumental in shaping BitView.net into the remarkable community it is today. Your leadership and strategic guidance have been vital in navigating the challenges and opportunities that have come our way.
                <br><br>
                To our talented Developers, your technical expertise and innovative ideas have transformed BitView into a cutting-edge platform that perfectly represent how YouTube looked like back in the days. Your countless hours of coding, problem-solving, and feature implementation have elevated the user experience and made our platform a hub of creativity and entertainment. Your dedication to refining the functionality and performance of the site has been truly commendable.
                <br><br>
                To our diligent Moderators, I extend my deepest appreciation for maintaining the integrity and safety of our community. Your vigilance in enforcing the rules and guidelines, ensuring respectful interactions, and swiftly addressing any issues that arise has been crucial in fostering a welcoming environment for all users. Your efforts in keeping BitView a space for constructive engagement and positive content are highly commendable.
                <br><br>
                Together, as a unified team, we have achieved significant milestones and overcome numerous obstacles. The success of BitView is a testament to the collective effort and passion each one of you brings to the table. Your commitment to our shared vision has been truly inspiring, and I am grateful to have such exceptional individuals by my side.
                <br><br>
                As we continue to grow and evolve, let us cherish the bonds we have forged and remain committed to the values that define our little site. Together, we will continue that nostalgia trip and provide a platform for creators to showcase their talents.
                <br><br>
                Once again, thank you: Co-Owners, Developers, and Moderators, for your unwavering dedication, expertise, and unwavering support. Your hard work has not gone unnoticed, and I am incredibly proud to be part of this remarkable team.
                <br><br>
                Keep expressing yourself,<br>
                <3 vistafan12";
$LANGS['backtobitview'] = "Back to BitView";

/* My Friends */
$LANGS['myfriends'] = 'My Friends';
$LANGS['invites'] = 'Invites';
$LANGS['myinvites'] = 'My Invites';
$LANGS['incominginvites'] = 'Incoming Invites';
$LANGS['noinvites'] = 'You have no invites...';
$LANGS['actions'] = 'Actions';
$LANGS['retract'] = 'Retract';

/* About */
$LANGS['aboutus'] = 'About Us';
$LANGS['abouttitle'] = 'What is BitView?';
$LANGS['aboutdesc'] = 'BitView is a way to get your videos to the people who matter to you. With BitView you can:';
$LANGS['about1'] = 'Show off your favorite videos to the world';
$LANGS['about2'] = 'Take videos of your dogs, cats, and other pets';
$LANGS['about3'] = 'Blog the videos you take with your digital camera or cell phone';
$LANGS['about4'] = 'Securely and privately show videos to your friends and family around the world';
$LANGS['about5'] = '... and much, much more!';
$LANGS['aboutsignup'] = '<a href="/signup">Sign up now</a> and open a free account.';
$LANGS['abouthelp'] = 'To learn more about our service, please see our <a href="help">Help</a> section.';
$LANGS['aboutmail'] = 'Please feel free to <a href="mailto:contact@vidlii.co">contact us</a>.';

/* Community Guidelines */
$LANGS['bvguidelines'] = 'BitView Community Guidelines';
$LANGS['cgtitle1'] = 'Respect the BitView Community';
$LANGS['cgtitle2'] = "Don't Cross the Line";
$LANGS['cgtitle3'] = 'We Enforce These Guidelines';
$LANGS['cgtitle4'] = 'BitView is for the Community';
$LANGS['cgtitle5'] = 'Community Guideline Tips';
$LANGS['cgdesc1'] = "We're not asking for the kind of respect reserved for nuns, the elderly, and brain surgeons. We mean don't abuse the site. Every cool new community feature on BitView involves a certain level of trust. We trust you to be responsible, and millions of users respect that trust. Please be one of them.";
$LANGS['cgdesc2'] = "Here are some common-sense rules that will help you steer clear of trouble:";
$LANGS['cgdesc3'] = "Please take these rules seriously and take them to heart. Don't try to look for loopholes or try to lawyer your way around the guidelines — just understand them and try to respect the spirit in which they were created. If you'd like more details, check out our <a href='#tips'>Community Guideline Tips</a>.";
$LANGS['cgdesc4'] = "Okay, this one is more about us than you. BitView staff review flagged videos 24 hours a day, seven days a week to determine whether they violate our Community Guidelines. When they do, we remove them. Sometimes a video doesn’t violate our Community Guidelines, but may not be appropriate for everyone. These videos may be age-restricted. Accounts are penalized for Community Guidelines violations and serious or repeated violations can lead to account termination. If your account is terminated, you won’t be allowed to create any new accounts. For more information about how the Community Guidelines are enforced and the consequences of violating them, please visit the <a href='/help'>Help Center</a>.";
$LANGS['cgdesc5'] = "Remember that this is your community! Each and every  user of BitView makes the site what it is, so don't be afraid to dig in and get involved!";
$LANGS['cgdesc6'] = "That's it! Thanks for reading!";
$LANGS['cgdesc7'] = "Want a little more insight into the limits and exceptions in the Community Guidelines? Here are some helpful examples and tips:";
$LANGS['rule1'] = "BitView is not for pornography or sexually explicit content. If this describes your video, even if it's a video of yourself, don't post it on BitView. Also, be advised that we work closely with law enforcement and we report child exploitation.";
$LANGS['rule2'] = "Don't post videos showing bad stuff like animal abuse, drug abuse, under-age drinking and smoking, or bomb making.";
$LANGS['rule3'] = "Graphic or gratuitous violence is not allowed. If your video shows someone being physically hurt, attacked, or humiliated, don't post it.";
$LANGS['rule4'] = "BitView is not a shock site. Don't post gross-out videos of accidents, dead bodies or similar things intended to shock or disgust.";
$LANGS['rule5'] = "Respect copyright. Only upload videos that you made or that you are authorized to use. This means don't upload videos you didn't make, or use content in your videos that someone else owns the copyright to, such as music tracks, snippets of copyrighted programs, or videos made by other users, without necessary authorizations.";
$LANGS['rule6'] = "We encourage free speech and defend everyone's right to express unpopular points of view. But we don't permit hate speech (speech which attacks or demeans a group based on race or ethnic origin, religion, disability, gender, age, veteran status, and sexual orientation/gender identity). This also applies to the promotion of extremist ideologies in a positive light.";
$LANGS['rule7'] = "Things like predatory behavior, stalking, threats, harassment, intimidation, invading privacy, revealing other people’s personal information, and inciting others to commit violent acts or to violate the Terms of Use are taken very seriously. Anyone caught doing these things may be permanently banned from BitView.";
$LANGS['rule8'] = "Everyone hates spam. Don’t create misleading descriptions, tags, titles or thumbnails in order to increase views. It's not okay to post large amounts of untargeted, unwanted or repetitive content, including comments and private messages.";
$LANGS['rule9'] = "Let's keep the website safe. Don't try to brute force an account you do not own. Moreover, sharing an account's login information publicly is not allowed.";
$LANGS['rule10'] = "Multi-accounts suck. We want genuine numbers on videos and channels. Don't use more than one account to rate videos and/or comments. You are not allowed to use multiple accounts to subscribe to yourself either.";
$LANGS['rule11'] = "Did you break one of this rules and your account has been suspended? It goes without saying that evading this punishment is not accepted. Every new account that has been created by a suspended person will be automatically deleted.";
$LANGS['cglist1'] = "Have fun with the site. There's a lot to see here, and lots of folks making amazing stuff — one of them might be you! Equipment's getting cheaper and easier to use all the time, so dive in and enjoy.";
$LANGS['cglist2'] = "Let folks know what you think. Feedback's part of the experience, and when done with respect, can be a great way to make friends, share stories, and make your time on BitView richer. So leave comments, rate videos, make your own responses to videos that affect you, enter contests of interest — there's a lot going on and a lot of ways to participate.";
$LANGS['cglist3'] = "You may not like everbvhing you see. Some of the content here may offend you — if you find that it violates our Terms of Use, then click the button that says &quot;Flag&quot; under the video you're watching to submit it for review by BitView staff. If it doesn't, then consider just clicking on something else — why waste time watching videos you don't like?";
$LANGS['thebitviewteam'] = "— The BitView Team";
$LANGS['cgcat1'] = "Sex and Nudity";
$LANGS['cgcat2'] = "Hate Speech";
$LANGS['cgcat3'] = "Shocking and Disgusting";
$LANGS['cgcat4'] = "Dangerous Illegal Acts";
$LANGS['cgcat5'] = "Children";
$LANGS['cgcat6'] = "Copyright";
$LANGS['cgcat7'] = "Privacy";
$LANGS['cgcat8'] = "Harassment";
$LANGS['cgcat9'] = "Impersonation";
$LANGS['cgcat10'] = "Threats";
$LANGS['cgcat1desc'] = "Most nudity is not allowed, particularly if it is in a sexual context. Generally if a video is intended to be sexually provocative, it is less likely to be acceptable for BitView. There are exceptions for some educational, documentary and scientific content, but only if that is the sole purpose of the video and it is not gratuitously graphic. For example, a documentary on breast cancer would be appropriate, but posting clips out of context from the documentary might not be. This also applies for animated content.";
$LANGS['cgcat2desc'] = 'Hate speech" refers to content that promotes hatred against members of a protected group. For instance, racist or sexist content may be considered hate speech. Sometimes there is a fine line between what is and what is not considered hate speech. For instance, it is generally okay to criticize a nation, but not okay to make insulting generalizations about people of a particular nationality.';
$LANGS['cgcat3desc'] = "The world is a dangerous place. Sometimes people do get hurt and it’s inevitable that these events may be documented on BitView. However, it’s not okay to post violent or gory content that’s primarily intended to be shocking, sensational or disrespectful. If a video is particularly graphic or disturbing, it should be balanced with additional context and information. For instance, including a clip from a slaughter house in a video on factory farming may be appropriate. However, stringing together unrelated and gruesome clips of animals being slaughtered in a video may be considered gratuitous if its purpose is to shock rather than illustrate.";
$LANGS['cgcat4desc'] = "While it might not seem fair to say you can’t show something because of what viewers theoretically might do in response, we draw the line at content that’s intended to incite violence or encourage dangerous, illegal activities that have an inherent risk of serious physical harm or death. This means not posting videos on things like instructional bomb making, ninja assassin training, sniper attacks, videos that train terrorists, or tips on illegal street racing. Any depictions like these should be educational or documentary and shouldn’t be designed to help or encourage others to imitate them.";
$LANGS['cgcat5desc'] = "Videos involving children (anyone under the age of 18) are particularly sensitive. Videos containing children should never be sexually suggestive or violent. Please be cautious when posting something involving a child. If you’re sharing a private moment or home movie, consider making it a private video so that only your family and friends can see it. Moreover, by agreeing to the <a href='/terms'>Terms of Use</a>, you affirm that you are over the age of 13. Accounts belonging to underage users will be suspended.";
$LANGS['cgcat6desc'] = "When you create something original, you own the copyright for it. Likewise, when other people create content, they may have a copyright to it. As a creative community, it’s essential that everyone on BitView respect the copyrights of others. If you’re not sure if something will violate someone’s copyright, the safest thing to do is to create something completely original, with images and audio you’ve created. If it’s all yours you never have to worry about copyright — you own it. If you’ve recorded something from a DVD, videotaped your TV screen, or downloaded a video online, don’t post it unless you have permission.";
$LANGS['cgcat7desc'] = "If a video you've recorded features people who are readily identifiable and who haven't consented to being filmed, there's a chance they'll file a privacy complaint seeking its removal. We'll notify you if that happens and give you a chance to edit and re-upload your video before we act on the complaint. If we do remove your video for privacy reasons, don't upload another version featuring the same people. Chances are those people will file another privacy complaint or report you for harassment. Don't post other people's personal information, including phone numbers, addresses, credit card numbers, and government IDs. We're serious about keeping our users safe and suspend accounts that violate people's privacy.";
$LANGS['cgcat8desc'] = "It comes down to respect. BitView is all about sharing and interacting with the community in respectful ways. If you're not sure whether a video or comment you've made crosses the line, follow a simple rule of thumb: if you wouldn't say it to someone's face, don't say it on BitView. And if you're looking to attack, harass, demean, or impersonate others, go elsewhere.";
$LANGS['cgcat9desc'] = "Impersonating another user by copying someone's exact channel layout, using a similar username, or posing as that person in comments, emails or videos is considered harassment. If you want to keep your account, stay away from participating in any form of impersonation or harassing activity on the site.";
$LANGS['cgcat10desc'] = "Users shouldn't feel threatened when they're on BitView. Period. Don't leave threatening comments on other people's videos.";

/* Contests */
$LANGS['monthlycontest'] = "Monthly Contest";
$LANGS['monthlycontestschedule'] = "Monthly Video Contest Schedule";
$LANGS['whatisit'] = "What is it?";
$LANGS['thismonthcontest'] = "This Month";
$LANGS['lastmonthwinners'] = "Last Month Winners";
$LANGS['howtoenter'] = "How do I enter?";
$LANGS['whowins'] = "Who wins?";
$LANGS['whowinsdesc'] = "The winner will be picked at the end of the month by the BitView staff.";
$LANGS['theprize'] = "The Prize?";
$LANGS['theprizedesc'] = "Fame, fortune, and the envy of all eyes.";
$LANGS['contestsuggestion'] = 'Have a suggestion for a monthly video contest? Please <a href="mailto:contact@vidlii.co">Tell us</a> about it.';

/* Help */
$LANGS['q1'] = 'Q: How can I share my videos and link to them from my website?';
$LANGS['a1'] = 'A: <a href="/sharing">How to share and link to your videos</a>';
$LANGS['q2'] = 'Q: What kind of videos can I upload?';
$LANGS['a2'] = 'A: You may upload any kind of personal video that you would like to share with the world. We do not allow any nudity and your video must be appropriate for all audiences.
<br/>
<br/>
However, this still leaves a lot of room for creativity!! Do you own a <a href="results?search=dog&t=Search+Videos">dog</a> or a <a href="/results?search=cat&t=Search+Videos">cat</a>? Have you gone on vacationing in <a href="/results?search=mexico&t=Search+Videos">Mexico</a>? Do you live in <a href="/results?search=netherlands&t=Search+Videos">The Netherlands</a>?
<br/>
<br/>
These are just some examples of the videos that our users are uploading. In the end, you know yourself best. What would <i>you</i> like to capture on video?';
$LANGS['q3'] = 'Q: How long can my video be?';
$LANGS['a3'] = 'A: The video must be under 15 minutes long and less than 2GB in size (100MB if you use an old browser).';
$LANGS['q4'] = 'Q: What video file formats can I upload?';
$LANGS['a4'] = 'A: BitView accepts video files from most digital cameras and from cell phones in the .WMV, .AVI, .MOV, .MPG, .MP4 file formats.';
$LANGS['q5'] = 'Q: How can I improve my videos?';
$LANGS['a5'] = 'A: We encourage you to edit your videos with software such as <a href="https://windows-movie-maker-vista.en.softonic.com/" target="_blank">Windows Movie Maker</a> (included with every Windows installation), or <a href="https://www.apple.com/lae/imovie/" target="_blank">Apple iMovie</a>. Using these programs you can easily edit your videos, add soundtracks, etc.';
$LANGS['q6'] = 'Q: Do I retain copyrights and other legal rights to my videos?';
$LANGS['a6'] = 'A: Yes. You retain all rights to your content. BitView assumes no copyright to your material.';
$LANGS['q7'] = 'Q: What is your policy on copyright infringement?';
$LANGS['a7'] = "A: BitView respects the rights of copyright holders and publishers and is only accepting video uploads from persons who hold all necessary rights to the uploaded material. Our policy is to respond to any notices of alleged infringement that comply with the Digital Millennium Copyright Act (DMCA). If we receive a notice or otherwise have reason to believe that content you submitted infringes another party's copyright, your account may be terminated and the video removed from BitView.";
$LANGS['q8'] = 'Q: How do I report copyright infringement?';
$LANGS['a8'] = 'A: If you believe that someone else has uploaded your copyrighted content without your permission, we encourage you to contact that person in order to resolve any differences with them directly. You can also contact our support team using this <a href="mailto:contact@vidlii.co">email</a>.';
$LANGS['q9'] = 'Q: What if I have been falsely accused of copyright infringement?';
$LANGS['a9'] = "A: We'll let you know if we receive a copyright complaint about any of your video content that is hosted on BitView. We'll give you the opportunity to respond appropriately.";
$LANGS['q10'] = 'Q: What are you doing to prevent content that violates your policies from appearing in BitView?';
$LANGS['a10'] = 'A: We do a preliminary review on uploaded videos through both a manual and automated process. Although we try our best to detect and remove videos that violate our policy guidelines, our review process is primarily focused on removing adult content or obvious copyright violations, and is not bulletproof. However, we encourage our viewers to notify us when they discover policy violations or copyright issues -- we have a process for reviewing reported policy violations, and respond to reported copyright violations under the Digital Millennium Copyright Act.';
$LANGS['q11'] = 'Q: Do you have a Discord server or Twitter?';
$LANGS['a11'] = 'Yes! We actually have a Discord server and Twitter. You can join into the Discord server by clicking <a href="https://discord.gg/wgGaqCmwuQ">here</a>, and follow us on Twitter <a href="https://twitter.com/bitview_">here</a>.';
$LANGS['q12'] = "Q: I'm using an old browser while on BitView and thus can't watch videos. What can I do?";
$LANGS['activate'] = 'Activate';
$LANGS['deactivate'] = 'Deactivate';
$LANGS['flashdisclaimer'] = "<b>Note:</b> BitView's Flash Player is being offered as a compatibility option. If your browser supports BitView's HTML5 player you shouldn't enable this option.";

/* BitView on your site */
$LANGS['bvsitetitle1'] = "The Basics";
$LANGS['bvsitetitle2'] = "APIs and User Engagement";
$LANGS['bvsitedesc1'] = 'Whatever presence you have on the Internet—a large website, a blog, a social network page, or pretty much anbvhing else—there are many ways to integrate BitView into it. From simple video embeds to our full-powered APIs, you can integrate video at all levels of technical expertise.';
$LANGS['bvsitedesc2'] = 'Bringing BitView to your site is more than just adding some of the thousands of videos available on BitView. It keeps your visitors interested and allows self-expression and interaction with one of their favorite services. And it brings your site, blog, or page into the BitView video community — an international network of users, creators, and sites connected through a huge collection of online videos.';
$LANGS['bvsitedesc3'] = "We've highlighted some typical ways of integrating video content below — just click the arrow next to the question to get the answer. If you have any questions or suggestions, or projects that you would like us to know about, please leave the questions in our <a href='https://discord.gg/wgGaqCmwuQ'>Discord server</a>.";
$LANGS['bvsitesectiontitle1'] = "How do I add a video to my blog or web page?";
$LANGS['bvsitesectiontitle2'] = "How do I add a video to my social network page?";
$LANGS['bvsitesectiontitle3'] = "I work for a large blog/web company. How can video increase user engagement on our site?";
$LANGS['bvsitesectiontitle4'] = "We have a site and we have our own videos. Can we post these on our site using BitView?";
$LANGS['bvsitesection1desc1'] = "You'll need to edit the HTML of your blog entry or page—this should be relatively straightforward. In Blogger, for example, just click the &quot;Edit HTML&quot; tab.";
$LANGS['bvsitesection1desc2'] = "Next, go to the video that you want, and look for the 'Embed' box in the &quot;About This Video&quot; section. Copying the HTML code that's there into your website will create an embedded player; the video will play within your site when the user clicks on the 'Play' button.";
$LANGS['bvsitesection1desc3'] = "You can resize the player by editing the <em>object width=&quot;425&quot;</em> and  <em>height=&quot;350&quot;</em> fields at both the beginning and end of the embedded player code. Make sure that the sizes you choose have the same ratio as the default numbers, so that the video doesn't get stretched—just multiply the width by 0.8235 to get the height.";
$LANGS['bvsitesection2desc1'] = "Adding videos to your profiles on social networks like SpaceHey is a great way to share your videos or favorites with friends. Or, if you're promoting something (like your band) on SpaceHey, videos will help attract visitors to your page, who can then then share the link with their friends. The social network sites have similar ways to add videos, so we'll use SpaceHey as an example.";
$LANGS['bvsitesection2desc2'] = 'Sign in to your SpaceHey profile, then click the "Edit Profile" button.';
$LANGS['bvsitesection2desc3'] = "Next, go to the video that you want, and look for the 'Embed' box in the &quot;About This Video&quot; section. Copying the HTML code that's there into your website will create an embedded player.";
$LANGS['bvsitesection2desc4'] = "You can resize the player by editing the object width=&quot;425&quot; and height=&quot;350&quot; fields at both the beginning and end of the embedded player code. Make sure that the sizes you choose have the same ratio as the default numbers, so that the video doesn't get stretched—just multiply the width by 0.8235 to get the height.";
$LANGS['bvsitesection2desc5'] = 'Click "Preview", and then "Submit".';
$LANGS['bvsitesection3desc1'] = "Video is much more engaging than text. It draws more users and keeps them on your site for longer. BitView has a large repository of Internet video content along with the search, playback and API tools to make adding video easier for you.";
$LANGS['bvsitesection3desc2'] = "When looking to increase engagement, try using video as a way to start discussion or make a commentary by creating more context for your users:";
$LANGS['bvsitesection4desc1'] = "It's very easy to build out your own site with your own videos for free. All you need to do is upload the videos to BitView first. There's no charge and we will cover hosting and streaming costs. It's not only a great way to increase user engagement on your site, but it's very easy, and free as well.";
$LANGS['bvsitesection4desc2'] = "Once you have uploaded the videos you can pull them back to the site:";
$LANGS['bvsitesection4desc3'] = "<b>Embed videos one-by-one:</b> Go to the video that you want to put on your website, and look for the 'Embed' box next to the video player. Copying the HTML code that's there into your blog will create an embedded player; the video will play within your site when the user clicks on the 'Play' button.";

/* RSS Feeds */
$LANGS['rsstitle1'] = "What Are RSS Feeds?";
$LANGS['rsstitle2'] = "How to Access RSS Feeds";
$LANGS['rsstitle3'] = "How to Subscribe to BitView's RSS Feeds";
$LANGS['rssdesc1'] = "Really Simple Syndication (RSS) is an XML-based format used for content distribution and syndication. Subscribing to RSS feeds allows you to receive custom, up-to-date information from your favorite online content sources without having to regularly check the site for updates.";
$LANGS['rssdesc2'] = "News readers that display RSS feeds from the websites you specify—they check the RSS feeds you have subscribed to and display new items from each feed. You can download news reader applications for your computer, and here are also many popular web-based news readers available, such as Google Reader and Bloglines. Some web browsers and email applications also have RSS capabilities built in.";
$LANGS['rssdesc3'] = "You can see a list of many available news readers at <a href='http://en.wikipedia.org/wiki/List_of_feed_aggregators'>Wikipedia</a>."; //Use your language's Wikipedia article if possible
$LANGS['rssdesc4'] = "BitView offers several RSS feeds for categorized groups of videos (such as recently uploaded, top viewed etc) as well as customized feeds for users and tags.";
$LANGS['rssdesc5'] = "To subscribe to categorized groups of videos, simply go to the category you want (for example, &quot;<a href='/browse'>Most Viewed - Today</a>&quot;). Then click on the orange 'RSS' button. This should trigger your chosen news reader to add the subscription.";
$LANGS['rssdesc6'] = "If your browser has RSS capabilities, then you can add the feed there. The command varies between browsers, but can usually be found on the 'File' or 'Bookmarks' menus, and will be called something like &quot;Subscribe to this page&quot; or &quot;New Live Bookmark&quot;.";
$LANGS['rssthispage'] = "RSS this page";

/* TestView */
$LANGS['testviewdesc'] = "Welcome to TestView, our ideas incubator. This is where BitView engineers and developers test out recipes and concoctions that aren't quite fully baked and invite you to tell us how they're coming along.";
$LANGS['flashvideo'] = "Flash Video";
$LANGS['flashvideodesc'] = "Your browser doesn't support HTML5 video? Don't worry! Try out our Flash player.";
$LANGS['feather'] = "Feather";
$LANGS['featherdesc'] = "View BitView videos on a super-low latency page.";
$LANGS['tryitout'] = "Try it out";
$LANGS['disabletest'] = "Disable";

/* Footer */
$LANGS['youraccount'] = 'El teu compte';
$LANGS['inbox'] = "Safata d'entrada";
$LANGS['footmore'] = 'més...';
$LANGS['helpinfo'] = 'Ajuda';
$LANGS['helpcenter'] = 'Ajuda';
$LANGS['ourtwitter'] = 'Nostre Twitter';
$LANGS['ourdiscord'] = 'Nostre Discord';
$LANGS['guidelines'] = 'Normes de la comunitat';
$LANGS['partnerships'] = 'Associacions';
$LANGS['terms'] = "Condicions d'ús";
$LANGS['privacypolicy'] = 'Política de privacitat';
$LANGS['currentlanguage'] = 'Llengua actual';
$LANGS['showlanguages'] = 'Mostrar idiomes';
$LANGS['setlanguagepref'] = "Establir preferència d'idioma";
$LANGS['programs'] = 'Programs';
$LANGS['developers'] = 'Developers';
$LANGS['bitviewblog'] = 'BitView Blog';
$LANGS['policy'] = 'Policy';
$LANGS['discover'] = 'Discover';
$LANGS['bvphone'] = 'BitView on Your Phone';
$LANGS['bvsite'] = 'BitView on Your Site';
$LANGS['bvrss'] = 'BitView RSS Feeds';
$LANGS['mobile'] = 'Mobile';
?>
