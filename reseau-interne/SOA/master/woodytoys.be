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
ns              IN      A       172.16.128.2  

; Resolver
resolv          IN      A       172.16.128.3  

; A record for www
www             IN      A       172.16.128.4 
 
