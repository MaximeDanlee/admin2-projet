$ORIGIN l2-2.ephec-ti.be.
$TTL	3600
@	    IN	    SOA	    ns.l2-2.ephec-ti.be.   he201801.students.ephec.be. (

		    2021042801	; Serial
			3600		; Refresh
			600		    ; Retry
			1209700		; Expire
			600 )	    ; Negative Cache TTL


; indique les différents fonctions da	ns le réseau et quel serveur s'en occupe
l2-2.ephec-ti.be.       IN      NS      				ns.l2-2.ephec-ti.be.
@						IN 		MX 		10				mail.l2-2.ephec-ti.be.
_sip._tcp		86400			IN		SRV		10		60	5060	voip.l2-2.ephec-ti.be.
_sip._udp		86400			IN		SRV		10		60	5060	voip.l2-2.ephec-ti.be.


; liaison des noms de serveurs à leurs adresses ip
ns                      IN      A       				135.125.101.226
@                       IN      A       				135.125.101.226
www                     IN      A       				135.125.101.226
b2b                     IN      A       				135.125.101.226
mail 					IN		A						135.125.101.226
voip					IN		A						135.125.101.226
