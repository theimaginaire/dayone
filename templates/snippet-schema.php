<script type="application/ld+json">
	{
  	"@context": "http://schema.org",
  	"@type": "LocalBusiness",
  	"address": {
    "@type": "PostalAddress",
    "addressLocality": "<?php the_field('street_2', 'options'); ?>",
    "addressRegion": "<?php the_field('towncity', 'options'); ?>",
    "postalCode":"<?php the_field('postcode', 'options'); ?>",
    "streetAddress": "<?php the_field('street', 'options'); ?>"
  	},
  	"description": "<?php the_field('company_description', 'options'); ?>",
  	"name": "<?php the_field('company', 'options'); ?>",
  	"telephone": "<?php the_field('phone', 'options'); ?>",
  	"openingHours": "Mo,Tu,We,Th,Fr 08:30-17:30",
  	"geo": {
    "@type": "GeoCoordinates",
    "latitude": "52.9245300565903",
    "longitude": "-1.2882369220901637"
 		}, 			
  	"sameAs" : [ "<?php the_field('facebook', 'options'); ?>",
    "<?php the_field('twitter', 'options'); ?>",
    "<?php the_field('google', 'options'); ?>"]
	}
</script>