$ORIGIN tl2-2.ephec-ti.be.
$TTL	3600
@	    IN	    SOA	    ns.tl2-2.ephec-ti.be.   he201801@students.ephec.be. (

		    2	        ; Serial
			3600		; Refresh
			600		    ; Retry
			86400		; Expire
			600 )	    ; Negative Cache TTL


tl2-2.ephec-ti.be.      IN      NS      				ns.tl2-2.ephec-ti.be.
@						IN 		MX 		10				mail.tl2-2.ephec-ti.be.
_sip._tcp		86400			IN		SRV		10		60	5060	voip.tl2-2.ephec-ti.be.


ns                      IN      A       				172.16.0.4  ; 135.125.101.226
@                       IN      A       				172.16.0.2  ; 135.125.101.226
www                     IN      A       				172.16.0.2  ; 135.125.101.226
b2b                     IN      A       				172.16.0.3  ; 135.125.101.226
mail 					IN		A						172.16.0.5	; 135.125.101.226
voip					IN		A						172.16.0.6  ; 135.125.101.226
