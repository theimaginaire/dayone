<div itemscope itemtype="http://schema.org/LocalBusiness">
   <span itemprop="name"><?php echo imaginaire_get_option('company_name'); ?></span>
   <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
     <span itemprop="streetAddress"><?php echo imaginaire_get_option('street'); ?></span>,
     <span itemprop="addressLocality"><?php echo imaginaire_get_option('city'); ?></span>,
     <span itemprop="addressRegion"><?php echo imaginaire_get_option('county'); ?></span>,
     <span itemprop="postalCode"><?php echo imaginaire_get_option('postcode'); ?></span>
   </div>
</div>