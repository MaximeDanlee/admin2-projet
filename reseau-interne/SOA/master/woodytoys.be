$TTL 604800
@       IN      SOA     ns.woodytoys.be.       maxime.woodytoys.be. (
                5               ; Serial
                604800          ; Refresh
                86400           ; Retry
                2419200         ; Expire
                604800 )        ; Negative Cache TTL

; Name servers
woodytoys.be.  IN      NS       ns.woodytoys.be.

; A record for name server
ns              IN      A       192.168.0.2  ;adress ip temporaire

; Resolver
resolv          IN      A       192.168.0.1  ;adress ip temporaire

; A record for www
www             IN      A       192.168.0.3  ;adress ip temporaire
 
