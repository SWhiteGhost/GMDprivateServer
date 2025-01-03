<?php
/*
	Welcome to webhooks translation file!
	You're currently at Spanish (Español) language
	Credits: @Neejik / Nejik.
                 @is.maxi / Maxi.
	
	If you see array instead of simple string, that means you can add as many variations of translation as you want and they will be picked randomly
*/
$webhookLang['rateSuccessTitle'] = ['Un nivel ha sido rateado', '¡Nuevo nivel rateado!', 'Alguien le dió rate a un nivel']; // Este es un array
$webhookLang['rateSuccessTitleDM'] = ['¡Tu nivel ha sido rateado!', '¡Alguien le dió rate a tu nivel!'];
$webhookLang['rateSuccessDesc'] = '%1$s le dió rate a un nivel'; // Y este es un string
$webhookLang['rateSuccessDescDM'] = '¡%1$s le dió rate a tu nivel! %2$s';
$webhookLang['rateFailTitle'] = ['Un nivel ha sido desrateado', 'Alguien le quitó el rate a un nivel'];
$webhookLang['rateFailTitleDM'] = ['Tu nivel ha sido desrateado...', 'Alguien le quitó el rate a tu nivel...'];
$webhookLang['rateFailDesc'] = '%1$s le quitó el rate a un nivel';
$webhookLang['rateFailDescDM'] = '%1$s le quitó el rate a tu nivel %2$s...';

$webhookLang['levelTitle'] = 'Nivel';
$webhookLang['levelDesc'] = '%1$s por %2$s'; // Nombre por Creador
$webhookLang['levelIDTitle'] = 'ID del Nivel';
$webhookLang['difficultyTitle'] = 'Dificultad';
$webhookLang['difficultyDesc0'] = '%1$s, %2$s estrella'; // Auto, 1 estrella
$webhookLang['difficultyDesc1'] = '%1$s, %2$s estrellas'; // Fácil, 2 estrellas
$webhookLang['difficultyDesc2'] = '%1$s, %2$s estrellas'; // Difícil, 5 estrellas
$webhookLang['difficultyDescMoon0'] = '%1$s, %2$s luna'; // Auto, 1 luna (Plataforma)
$webhookLang['difficultyDescMoon1'] = '%1$s, %2$s lunas'; // Fácil, 2 lunas (Plataforma)
$webhookLang['difficultyDescMoon2'] = '%1$s, %2$s lunas'; // Difícil, 5 lunas (Plataforma)
$webhookLang['statsTitle'] = 'Estadísticas';
$webhookLang['requestedTitle'] = 'Rate solicitado';
$webhookLang['requestedDesc0'] = '%1$s estrella'; // 1 estrella
$webhookLang['requestedDesc1'] = '%1$s estrellas'; // 2 estrellas
$webhookLang['requestedDesc2'] = '%1$s estrellas'; // 5 estrellas
$webhookLang['requestedDescMoon0'] = '%1$s luna'; // 1 luna (Plataforma)
$webhookLang['requestedDescMoon1'] = '%1$s lunas'; // 2 lunas (Plataforma)
$webhookLang['requestedDescMoon2'] = '%1$s lunas'; // 5 lunas (Plataforma)
$webhookLang['descTitle'] = 'Descripción';
$webhookLang['descDesc'] = '*Sin descripción*';
$webhookLang['footer'] = '¡Gracias por jugar, %1$s!';

$webhookLang['suggestTitle'] = ['Echa un vistazo a este nivel', 'Un nivel ha sido enviado para rate', 'Alguien envió un nivel para rate'];
$webhookLang['suggestDesc'] = '%1$s envió un nivel para rate';
$webhookLang['footerSuggest'] = '¡Gracias por moderar, %1$s!';

$webhookLang['accountLinkTitle'] = ['Sincronización de cuenta', 'Alguien quiere sincronizar una cuenta'];
$webhookLang['accountLinkDesc'] = '%1$s quiere sincronizar su cuenta del juego a tu cuenta de Discord. Publica **!discord accept *código*** en tu perfil del juego para aceptar. Si no eres tú - **ignora** este mensaje';
$webhookLang['accountCodeFirst'] = 'Primer número';
$webhookLang['accountCodeSecond'] = 'Segundo número';
$webhookLang['accountCodeThird'] = 'Tercer número';
$webhookLang['accountCodeFourth'] = 'Cuarto número';
$webhookLang['accountUnlinkTitle'] = ['Cuenta desincronizada', 'Tu cuenta ha sido desvinculada'];
$webhookLang['accountUnlinkDesc'] = 'Has desvinculado %1$s de tu cuenta de Discord exitosamente';
$webhookLang['accountAcceptTitle'] = ['Cuenta sincronizada', 'Tu cuenta ha sido vinculada'];
$webhookLang['accountAcceptDesc'] = 'Has sincronizado %1$s a tu cuenta de Discord exitosamente';

$webhookLang['playerBanTitle'] = ['Un usuario ha sido baneado', 'Alguien ha baneado un usuario', 'Baneo'];
$webhookLang['playerBanTitleDM'] = ['Has sido baneado...', 'Alguien te ha baneado...', '¡Baneo!'];
$webhookLang['playerUnbanTitle'] = ['Un usuario ha sido desbaneado', 'Alguien ha desbaneado un usuario', 'Desbaneo'];
$webhookLang['playerUnbanTitleDM'] = ['¡Has sido desbaneado!', '¡Alguien te ha desbaneado!', '¡Desbaneado!'];
$webhookLang['playerBanTopDesc'] = '%1$s ha baneado a %2$s del top de jugadores';
$webhookLang['playerBanTopDescDM'] = '%1$s te ha baneado del top de jugadores...';
$webhookLang['playerUnbanTopDesc'] = '%1$s ha desbaneado a %2$s del top de jugadores';
$webhookLang['playerUnbanTopDescDM'] = '¡%1$s te ha desbaneado del top de jugadores!';
$webhookLang['playerBanCreatorDesc'] = '%1$s ha baneado a %2$s del top de creadores';
$webhookLang['playerBanCreatorDescDM'] = '%1$s te ha baneado del top de creadores...';
$webhookLang['playerUnbanCreatorDesc'] = '%1$s ha desbaneado a %2$s del top de creadores';
$webhookLang['playerUnbanCreatorDescDM'] = '¡%1$s te ha desbaneado del top de creadores!';
$webhookLang['playerBanUploadDesc'] = '%1$s ha baneado a %2$s de subir niveles';
$webhookLang['playerBanUploadDescDM'] = '%1$s te ha baneado de subir niveles...';
$webhookLang['playerUnbanUploadDesc'] = '%1$s ha desbaneado a %2$s de subir niveles';
$webhookLang['playerUnbanUploadDescDM'] = '¡%1$s te ha desbaneado de subir niveles!';
$webhookLang['playerModTitle'] = 'Moderador';
$webhookLang['playerReasonTitle'] = 'Razón';
$webhookLang['playerBanReason'] = '*Sin razón*';
$webhookLang['footerBan'] = '%1$s.';
$webhookLang['playerBanCommentDesc'] = '%1$s ha baneado a %2$s de los comentarios';
$webhookLang['playerBanCommentDescDM'] = '%1$s te ha baneado de los comentarios...';
$webhookLang['playerUnbanCommentDesc'] = '%1$s ha desbaneado a %2$s de los comentarios';
$webhookLang['playerUnbanCommentDescDM'] = '¡%1$s te ha desbaneado de los comentarios!';
$webhookLang['playerBanAccountDesc'] = '%1$s ha baneado la cuenta de %2$s';
$webhookLang['playerBanAccountDescDM'] = '%1$s ha baneado tu cuenta...';
$webhookLang['playerUnbanAccountDesc'] = '%1$s ha desbaneado la cuenta de %2$s';
$webhookLang['playerUnbanAccountDescDM'] = '¡%1$s ha desbaneado tu cuenta!';
$webhookLang['playerExpiresTitle'] = 'Expira en';
$webhookLang['playerTypeTitle'] = 'Tipo de usuario';
$webhookLang['playerTypeName0'] = 'ID de cuenta';
$webhookLang['playerTypeName1'] = 'ID de usuario';
$webhookLang['playerTypeName2'] = 'Dirección IP';

$webhookLang['dailyTitle'] = 'Nuevo Daily';
$webhookLang['dailyTitleDM'] = '¡Tu nivel es Daily!';
$webhookLang['dailyDesc'] = 'Este nivel ahora es un daily';
$webhookLang['dailyDescDM'] = '%1$s, hoy tu nivel es un daily';
$webhookLang['weeklyTitle'] = 'Nuevo Weekly';
$webhookLang['weeklyTitleDM'] = '¡Tu nivel es Weekly!';
$webhookLang['weeklyDesc'] = 'Este nivel ahora es un weekly';
$webhookLang['weeklyDescDM'] = '%1$s, esta semana tu nivel es un weekly';
$webhookLang['eventTitle'] = 'Nuevo Event';
$webhookLang['eventTitleDM'] = '¡Tu nivel es Event!';
$webhookLang['eventDesc'] = ' Este nivel ahora es un evento';
$webhookLang['eventDescDM'] = '%1$s, actualmente tu nivel es un evento';

$webhookLang['logsRegisterTitle'] = '¡Nueva cuenta!';
$webhookLang['logsRegisterDesc'] = '¡Alguien registró una nueva cuenta!';
$webhookLang['logsUsernameField'] = 'Nombre de usuario del jugador';
$webhookLang['logsPlayerIDField'] = 'ID del jugador';
$webhookLang['logsRegisterTimeField'] = 'Fecha de registro';
$webhookLang['logsIsActivatedField'] = '¿Está activada?';
$webhookLang['logsRegisterYes'] = 'Sí';
$webhookLang['logsRegisterNo'] = 'No';

$webhookLang['logsLevelDeletedTitle'] = '¡Un nivel fue eliminado!';
$webhookLang['logsLevelDeletedDesc'] = '¡Alguien eliminó un nivel!';
$webhookLang['logsLevelChangedTitle'] = '¡Un nivel fue cambiado!';
$webhookLang['logsLevelChangedDesc'] = '¡Alguien cambió un nivel!';
$webhookLang['logsLevelUploadedTitle'] = '¡Un nivel fue subido!';
$webhookLang['logsLevelUploadedDesc'] = '¡Alguien subió un nivel!';
$webhookLang['logsLevelChangeNameValue'] = 'Nombre antiguo:'.PHP_EOL.'%1$s'.PHP_EOL.'Nuevo nombre:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeExtIDValue'] = 'Autor antiguo:'.PHP_EOL.'%1$s'.PHP_EOL.'Nuevo autor:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeDescValue'] = 'Descripción antigua:'.PHP_EOL.'%1$s'.PHP_EOL.'Nueva descripción:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeSongIDValue'] = 'Canción antigua:'.PHP_EOL.'%1$s'.PHP_EOL.'Nueva canción:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeAudioTrackValue'] = 'Audiotrack antiguo:'.PHP_EOL.'%1$s'.PHP_EOL.'Nuevo audiotrack:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangePasswordValue'] = 'Contraseña antigua:'.PHP_EOL.'||%1$s||'.PHP_EOL.'Nueva contraseña:'.PHP_EOL.'||%2$s||';
$webhookLang['logsLevelChangeCoinsValue'] = '¿Las monedas fueron verificadas antes?'.PHP_EOL.'**%1$s**'.PHP_EOL.'¿Las monedas fueron verificadas después?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeUnlistedValue'] = 'Privacidad del nivel antes:'.PHP_EOL.'**%1$s**'.PHP_EOL.'Privacidad del nivel después:'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeUnlisted2Value'] = '(2) Privacidad del nivel antes:'.PHP_EOL.'**%1$s**'.PHP_EOL.'(2) Privacidad del nivel después:'.PHP_EOL.'**%2$s**'; // No utilizado y probablemente nunca lo será
$webhookLang['logsLevelChangeUpdateLockedValue'] = '¿Se bloquearon las actualizaciones antes?'.PHP_EOL.'**%1$s**'.PHP_EOL.'¿Se bloquearon la actualizaciones después?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeCommentLockedValue'] = '¿Se bloquearon los comentarios antes?'.PHP_EOL.'**%1$s**'.PHP_EOL.'¿Se bloquearon los comentarios después?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeNameField'] = 'El nombre del nivel fue cambiado';
$webhookLang['logsLevelChangeExtIDField'] = 'El autor del nivel fue cambiado';
$webhookLang['logsLevelChangeDescField'] = 'La descripción del nivel fue cambiada';
$webhookLang['logsLevelChangeSongIDField'] = 'La canción del nivel fue cambiada';
$webhookLang['logsLevelChangeAudioTrackField'] = 'El audiotrack del nivel fue cambiado';
$webhookLang['logsLevelChangePasswordField'] = 'La contraseña del nivel fue cambiada';
$webhookLang['logsLevelChangeCoinsField'] = 'Las monedas del nivel fueron cambiadas';
$webhookLang['logsLevelChangeUnlistedField'] = 'La privacidad del nivel fue cambiada';
$webhookLang['logsLevelChangeUnlisted2Field'] = 'La privacidad del nivel fue cambiada (2)'; // No utilizado y probablemente nunca lo será
$webhookLang['logsLevel ChangeUpdateLockedField'] = 'El estado de bloqueo de actualización fue cambiado';
$webhookLang['logsLevelChangeCommentLockedField'] = 'El estado de bloqueo de comentarios fue cambiado';
$webhookLang['logsLevelChangeWhoField'] = '¿Quién cambió el nivel?';

$webhookLang['songTitle'] = 'Canción';
$webhookLang['levelIsPublic'] = 'El nivel es público';
$webhookLang['levelOnlyForFriends'] = 'El nivel es solo para amigos';
$webhookLang['levelIsUnlisted'] = 'El nivel es no listado';
$webhookLang['unlistedTitle'] = 'Privacidad del nivel';

$webhookLang['logsAccountChangeWhoField'] = '¿Quién cambió la cuenta?';
$webhookLang['logsAccountChangeUsernameField'] = 'El nombre de usuario fue cambiado';
$webhookLang['logsAccountChangeUsernameValue'] = 'Nombre de usuario antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Nombre de usuario después:'.PHP_EOL.'`%2$s`';
$webhookLang['mS0'] = 'Los mensajes directos están abiertos';
$webhookLang['mS1'] = 'Los mensajes directos están abiertos solo para amigos';
$webhookLang['mS2'] = 'Los mensajes directos están cerrados';
$webhookLang['logsAccountChangeMSField'] = 'La privacidad de los mensajes directos fue cambiada';
$webhookLang['logsAccountChangeMSValue'] = 'La privacidad de los mensajes directos antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'La privacidad de los mensajes directos después:'.PHP_EOL.'`%2$s`';
$webhookLang['frS0'] = 'Las solicitudes de amistad están abiertas';
$webhookLang['frS1'] = 'Las solicitudes de amistad están cerradas';
$webhookLang['logsAccountChangeFRSField'] = 'La privacidad de las solicitudes de amistad fue cambiada';
$webhookLang['logsAccountChangeFRSValue'] = 'La privacidad de las solicitudes de amistad antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'La privacidad de las solicitudes de amistad después:'.PHP_EOL.'`%2$s`';
$webhookLang['cS0'] = 'El historial de comentarios está abierto';
$webhookLang['cS1'] = 'El historial de comentarios está abierto solo para amigos';
$webhookLang['cS2'] = 'El historial de comentarios está cerrado';
$webhookLang['logsAccountChangeCSField'] = 'La privacidad del historial de comentarios fue cambiada';
$webhookLang['logsAccountChangeCSValue'] = 'La privacidad del historial de comentarios antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'La privacidad del historial de comentarios después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeYTField'] = 'El enlace del canal de YouTube fue cambiado';
$webhookLang['logsAccountChangeYTValue'] = 'El enlace del canal de YouTube antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'El enlace del canal de YouTube después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeNoYT'] = 'Sin enlace de canal de YouTube';
$webhookLang['logsAccountChangeTWField'] = 'El enlace de la cuenta de X fue cambiado';
$webhookLang['logsAccountChangeTWValue'] = 'El enlace de la cuenta de X antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'El enlace de la cuenta de X después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeNoTW'] = 'Sin enlace de cuenta de X';
$webhookLang['logsAccountChangeTTVField'] = 'El enlace del canal de Twitch fue cambiado';
$webhookLang['logsAccountChangeTTVValue'] = 'El enlace del canal de Twitch antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'El enlace del canal de Twitch después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeNoTTV'] = 'Sin enlace de canal de Twitch';
$webhookLang['logsAccountChangeActiveField'] = 'El estado de actividad de la cuenta fue cambiado';
$webhookLang['logsAccountChangeActiveValue'] = '¿La cuenta estaba activada antes?'.PHP_EOL.'**%1$s**'.PHP_EOL.'¿Está activada la cuenta después?'.PHP_EOL.'**%2$s**';
$webhookLang['logsAccountChangePasswordField'] = 'La contraseña fue cambiada';
$webhookLang['logsAccountChangePasswordValue'] = '||... ¿Qué querías ver aquí?||';
$webhookLang['logsWhatWasChangedField'] = '¿Qué fue cambiado?';
$webhookLang['logsAccountChangedTitle'] = '¡La cuenta fue cambiada!';
$webhookLang['logsAccountChangedDesc'] = '¡Alguien cambió la cuenta!';

$webhookLang['logsListChangeWhoField'] = '¿Quién cambió la lista?';
$webhookLang['logsListDeletedTitle'] = '¡La lista fue eliminada!';
$webhookLang['logsListDeletedDesc'] = '¡Alguien eliminó la lista!';
$webhookLang['logsListUploadedTitle'] = '¡La lista fue subida!';
$webhookLang['logsListUploadedDesc'] = '¡Alguien subió la lista!';
$webhookLang['listTitle'] = 'Lista';
$webhookLang['listIDTitle'] = 'ID de la lista';
$webhookLang['unlistedListTitle'] = 'Privacidad de la lista';
$webhookLang['listIsPublic'] = 'La lista es pública';
$webhookLang['listIsUnlisted'] = 'La lista es no listada';
$webhookLang['listOnlyForFriends'] = 'La lista es solo para amigos';
$webhookLang['logsListChangedTitle'] = '¡La lista fue cambiada!';
$webhookLang['logsListChangedDesc'] = '¡Alguien cambió la lista!';
$webhookLang['logsListChangeNameField'] = 'El nombre de la lista fue cambiado';
$webhookLang['logsListChangeNameValue'] = 'Nombre de la lista antes:'.PHP_EOL.'%1$s'.PHP_EOL.'Nombre de la lista después:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeAccountIDField'] = 'El autor de la lista fue cambiado';
$webhookLang['logsListChangeAccountIDValue'] = 'Autor de la lista antes:'.PHP_EOL.'%1$s'.PHP_EOL.'Autor de la lista después:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeDescField'] = 'La descripción de la lista fue cambiada';
$webhookLang['logsListChangeDescValue'] = 'Descripción de la lista antes:'.PHP_EOL.'%1$s'.PHP_EOL.'Descripción de la lista después:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeReward0'] = '**%1$s** diamante'; // 1 diamante
$webhookLang['logsListChangeReward1'] = '**%1$s** diamantes'; // 2 diamantes
$webhookLang['logsListChangeReward2'] = '**%1$s** diamantes'; // 5 diamantes
$webhookLang['logsListChangeRewardField'] = 'La recompensa fue cambiada';
$webhookLang['logsListChangeRewardValue'] = 'Recompensa antes:'.PHP_EOL.'%1$s'.PHP_EOL.'Recompensa después:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeUnlistedField'] = 'La privacidad de la lista fue cambiada';
$webhookLang['logsListChangeUnlistedValue'] = 'Privacidad de la lista antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Privacidad de la lista después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsListChangeDiffField'] = 'La dificultad de la lista fue cambiada';
$webhookLang['logsListChangeDiffValue'] = 'Dificultad antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Dificultad después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsListChangeLevelsField'] = 'Los niveles de la lista fueron cambiados';
$webhookLang['logsListChangeLevelsValue'] = 'Niveles antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Niveles después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsListChangeRewardCount0'] = '**%1$s** nivel'; // 1 nivel
$webhookLang['logsListChangeRewardCount1'] = '**%1$s** niveles'; // 2 niveles
$webhookLang['logsListChangeRewardCount2'] = '**%1$s** niveles'; // 5 niveles
$webhookLang['logsListChangeRewardCountField'] = 'La cantidad de niveles requeridos para la recompensa fue cambiada';
$webhookLang['logsListChangeRewardCountValue'] = 'Cantidad de niveles antes:'.PHP_EOL.'%1 $s'.PHP_EOL.'Cantidad de niveles después:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeCommentLockedField'] = 'El estado de bloqueo de comentarios fue cambiado';
$webhookLang['logsListChangeCommentLockedValue'] = '¿Se bloquearon los comentarios antes?'.PHP_EOL.'**%1$s**'.PHP_EOL.'¿Se bloquearon los comentarios después?'.PHP_EOL.'**%2$s**';
$webhookLang['difficultyListDesc0'] = '%1$s, %2$s diamante'; // Auto, 1 estrella
$webhookLang['difficultyListDesc1'] = '%1$s, %2$s diamantes'; // Fácil, 2 estrellas
$webhookLang['difficultyListDesc2'] = '%1$s, %2$s diamantes'; // Difícil, 5 estrellas

$webhookLang['logsModChangeWhoField'] = '¿Quién cambió el moderador?';
$webhookLang['logsModDemotedTitle'] = '¡El moderador fue degradado!';
$webhookLang['logsModDemotedDesc'] = '¡Alguien degradó al moderador!';
$webhookLang['logsModPromotedTitle'] = '¡El moderador fue promovido!';
$webhookLang['logsModPromotedDesc'] = '¡Alguien promovió al moderador!';
$webhookLang['logsModChangeRoleUnknown'] = '*Rol desconocido*';
$webhookLang['roleField'] = 'Rol';
$webhookLang['logsModChangedTitle'] = '¡El moderador fue cambiado!';
$webhookLang['logsModChangedDesc'] = '¡Alguien cambió al moderador!';
$webhookLang['logsModChangeRoleField'] = 'El rol fue cambiado';
$webhookLang['logsModChangeRoleValue'] = 'Rol antiguo:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Nuevo rol:'.PHP_EOL.'`%2$s`';

$webhookLang['logsGauntletChangeWhoField'] = '¿Quién cambió el Gauntlet?';
$webhookLang['logsGauntletDeletedTitle'] = '¡El Gauntlet fue eliminado!';
$webhookLang['logsGauntletDeletedDesc'] = '¡Alguien eliminó el Gauntlet!';
$webhookLang['logsGauntletCreatedTitle'] = '¡El Gauntlet fue creado!';
$webhookLang['logsGauntletCreatedDesc'] = '¡Alguien creó el Gauntlet!';
$webhookLang['gauntletNameField'] = 'Nombre del Gauntlet';
$webhookLang['level1Field'] = 'Primer nivel';
$webhookLang['level2Field'] = 'Segundo nivel';
$webhookLang['level3Field'] = 'Tercer nivel';
$webhookLang['level4Field'] = 'Cuarto nivel';
$webhookLang['level5Field'] = 'Quinto nivel';
$webhookLang['logsGauntletChangedTitle'] = '¡El Gauntlet fue cambiado!';
$webhookLang['logsGauntletChangedDesc'] = '¡Alguien cambió el Gauntlet!';
$webhookLang['logsGauntletChangeGauntletField'] = 'El Gauntlet en sí fue cambiado';
$webhookLang['logsGauntletChangeGauntletValue'] = 'Antiguo Gauntlet:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Nuevo Gauntlet:'.PHP_EOL.'`%2$s`';
$webhookLang['logsGauntletChangeLevel1Field'] = 'Se cambió el primer nivel';
$webhookLang['logsGauntletChangeLevelValue'] = 'Nivel antes:'.PHP_EOL.'%1$s'.PHP_EOL.'Nivel después:'.PHP_EOL.'%2$s';
$webhookLang['logsGauntletChangeLevel2Field'] = 'Se cambió el segundo nivel';
$webhookLang['logsGauntletChangeLevel3Field'] = 'Se cambió el tercer nivel';
$webhookLang['logsGauntletChangeLevel4Field'] = 'Se cambió el cuarto nivel';
$webhookLang['logsGauntletChangeLevel5Field'] = 'Se cambió el quinto nivel';

$webhookLang['logsMapPackChangeWhoField'] = '¿Quién cambió el Map Pack?';
$webhookLang['logsMapPackDeletedTitle'] = '¡El Map Pack fue eliminado!';
$webhookLang['logsMapPackDeletedDesc'] = '¡Alguien eliminó el Map Pack!';
$webhookLang['logsMapPackCreatedTitle'] = '¡El Map Pack fue creado!';
$webhookLang['logsMapPackCreatedDesc'] = '¡Alguien creó el Map Pack!';
$webhookLang['packField'] = 'Map Pack';
$webhookLang['packRewardCoins0'] = '%1$s moneda'; // 1 moneda
$webhookLang['packRewardCoins1'] = '%1$s monedas'; // 2 monedas
$webhookLang['packRewardCoins2'] = '%1$s monedas'; // 5 monedas
$webhookLang['packRewardField'] = 'Recompensa';
$webhookLang['packRewardValue'] = '%1$s y %2$s'; // X estrellas y X monedas
$webhookLang['undefinedLevel'] = '*Nivel desconocido*';
$webhookLang['packLevelsField'] = 'Niveles';
$webhookLang['packColorsField'] = 'Colores';
$webhookLang['packColorsValue'] = 'Color de barra: `%1$s`'.PHP_EOL.'Color de texto: `%2$s`';
$webhookLang['packTimestampField'] = 'Fecha de creación';
$webhookLang['logsMapPackChangedTitle'] = '¡El Map Pack fue cambiado!';
$webhookLang['logsMapPackChangedDesc'] = '¡Alguien cambió el Map Pack!';
$webhookLang['logsMapPackChangeNameField'] = 'El nombre fue cambiado';
$webhookLang['logsMapPackChangeNameValue'] = 'Nombre antiguo:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Nuevo nombre:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeLevelsField'] = 'Los niveles fueron cambiados';
$webhookLang['logsMapPackChangeLevelsValue'] = 'Niveles antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Niveles después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeStarsField'] = 'Las estrellas fueron cambiadas';
$webhookLang['logsMapPackChangeStarsValue'] = 'Estrellas antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Estrellas después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeCoinsField'] = 'Las monedas fueron cambiadas';
$webhookLang['logsMapPackChangeCoinsValue'] = 'Monedas antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Monedas después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeDifficultyField'] = 'La dificultad fue cambiada';
$webhookLang['logsMapPackChangeDifficultyValue'] = 'Dificultad antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Dificultad después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeColor1Field'] = 'El color de la barra fue cambiado';
$webhookLang['logsMapPackChangeColorValue'] = 'Color antes:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Color después:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeColor2Field'] = 'El color del texto fue cambiado';

$webhookLang['levelsWarningTitle'] = '¡Alta cantidad de niveles!';
$webhookLang['levelsWarningDesc'] = '¡Advertencia! Se detectó una alta cantidad de niveles subidos!';
$webhookLang['levelsYesterdayField'] = 'Cantidad de niveles ayer';
$webhookLang['levelsTodayField'] = 'Cantidad de niveles hoy';
$webhookLang['levelsCompareField'] = '¿Cuántas veces más?';
$webhookLang['levelsCompareValue'] = '**%1$s** veces';

$webhookLang['accountsWarningTitle'] = '¡Alta cantidad de cuentas!';
$webhookLang['accountsWarningDesc'] = '¡Advertencia! Se detectó una alta cantidad de cuentas registradas!';
$webhookLang['accountsYesterdayField'] = 'Cantidad de cuentas ayer';
$webhookLang['accountsTodayField'] = 'Cantidad de cuentas hoy';
$webhookLang['accountsCountValue0'] = '**%1$s** cuenta'; // 1 cuenta
$webhookLang['accountsCountValue1'] = '**%1$s** cuentas'; // 2 cuentas
$webhookLang['accountsCountValue2'] = '**%1$s** cuentas'; // 5 cuentas

$webhookLang['commentsSpammingWarningTitle'] = '¡Posible spam de comentarios!';
$webhookLang['commentsSpammingWarningDesc'] = '¡Advertencia! Se detectó posible spam de comentarios!';
$webhookLang['similarCommentsField'] = 'Cantidad de comentarios similares';
$webhookLang['similarCommentsValue0'] = '**%1$s** comentario'; // 1 comentario
$webhookLang['similarCommentsValue1'] = '**%1$s** comentarios'; // 2 comentarios
$webhookLang['similarCommentsValue2'] = '**%1$s** comentarios'; // 5 comentarios
$webhookLang['similarCommentsAuthorsField'] = 'Autores de comentarios similares';
$webhookLang['commentsSpammerWarningTitle'] = '¡Posible spammer de comentarios!';
$webhookLang['commentsSpammerWarningDesc'] = '¡Advertencia! El jugador está haciendo demasiados comentarios similares!';
$webhookLang['commentSpammerField'] = 'Autor de comentarios similares';
$webhookLang['accountPostsSpammingWarningTitle'] = '¡Posible spam de publicaciones!';
$webhookLang['accountPostsSpammingWarningDesc'] = '¡Advertencia! Los jugadores están haciendo demasiadas publicaciones similares!';
$webhookLang['similarAccountPostsField'] = 'Cantidad de publicaciones similares';
$webhookLang['similarAccountPostsValue0'] = '**%1$s** publicación'; // 1 publicación
$webhookLang['similarAccountPostsValue1'] = '**%1$s** publicaciones'; // 2 publicaciones
$webhookLang['similarAccountPostsValue2'] = '**%1$s** publicaciones'; // 5 publicaciones
$webhookLang['accountPostsSpammerField'] = 'Autor de publicaciones similares';
$webhookLang['accountPostsSpammerWarningTitle'] = '¡Posible spammer de publicaciones!';
$webhookLang['accountPostsSpammerWarningDesc'] = '¡Advertencia! El jugador está haciendo demasiadas publicaciones similares!';
$webhookLang['similarAccountPostsAuthorsField'] = 'Autores de publicaciones similares';
$webhookLang['repliesSpammingWarningTitle'] = '¡Posible spam de respuestas!';
$webhookLang['repliesSpammingWarningDesc'] = '¡Advertencia! Los jugadores están haciendo demasiadas respuestas similares!';
$webhookLang['similarRepliesField'] = 'Cantidad de respuestas similares';
$webhookLang['similarRepliesValue0'] = '**%1$s** respuesta'; // 1 respuesta
$webhookLang['similarRepliesValue1'] = '**%1$s** respuestas'; // 2 respuestas
$webhookLang['similarRepliesValue2'] = '**%1$s** respuestas'; // 5 respuestas
$webhookLang['repliesSpammerField'] = 'Autor de respuestas similares';
$webhookLang['repliesSpammerWarningTitle'] = '¡Posible spammer de respuestas!';
$webhookLang['repliesSpammerWarningDesc'] = '¡Advertencia! El jugador está haciendo demasiadas respuestas similares!';
$webhookLang['similarRepliesAuthorsField'] = 'Autores de respuestas similares';
?>
