$ORIGIN l2-2.ephec-ti.be.
$TTL	3600
@	    IN	    SOA	    ns.l2-2.ephec-ti.be.   he201801.students.ephec.be. (

		    2	        ; Serial
			3600		; Refresh
			600		    ; Retry
			86400		; Expire
			600 )	    ; Negative Cache TTL


l2-2.ephec-ti.be.       IN      NS      				ns.l2-2.ephec-ti.be.
@						IN 		MX 		10				mail.l2-2.ephec-ti.be.
_sip._tcp		86400			IN		SRV		10		60	5060	voip.l2-2.ephec-ti.be.
_sip._udp		86400			IN		SRV		10		60	5060	voip.l2-2.ephec-ti.be.


ns                      IN      A       				135.125.101.218
@                       IN      A       				135.125.101.218
www                     IN      A       				135.125.101.218
b2b                     IN      A       				135.125.101.218
mail 					IN		A						135.125.101.218
voip					IN		A						135.125.101.218
