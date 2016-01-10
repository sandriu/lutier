/* I have to provide both mp3 and ogg files because Firefox 4.01 can't play mp3s for now, 
   see https://support.mozilla.com/en-US/questions/831413 */
$(document).ready(function(){

    var myPlaylist = new jPlayerPlaylist({
	jPlayer: "#jquery_jplayer_1",
	cssSelectorAncestor: "#jp_container_1"
    }, [
	{
	    title:"(1 of 2) J.Brahms - Sonata no. 1, Maria Florea, violin Rotaru 2009",
	    oga:"http://felixrotaru.com/wp-content/uploads/2011/09/VIP__Florea_Canyigueral_07.ogg",
	    mp3:"http://felixrotaru.com/wp-content/uploads/2011/09/VIP__Florea_Canyigueral_07.mp3",
	},
	{
	    title:"(2 of 2) F.Kreisler - Libesleid, Maria Florea, violin Rotaru 2009",
	    oga:"http://felixrotaru.com/wp-content/uploads/2011/09/VIP__Florea_Canyigueral_12.ogg",
	    mp3:"http://felixrotaru.com/wp-content/uploads/2011/09/VIP__Florea_Canyigueral_12.mp3",
	}
    ], {
	playlistOptions: {
	    enableRemoveControls: false
	},
	swfPath: "js",
	supplied: "oga, mp3"
    });
});
