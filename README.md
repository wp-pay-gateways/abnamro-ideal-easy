# WordPress Pay Gateway: ABN AMRO - iDEAL Easy

**ABN AMRO - iDEAL Easy driver for the WordPress payment processing library.**

## Test Account

| Option      | Value                                                               |
| ----------- | ------------------------------------------------------------------- |
| URL         | `https://internetkassa.abnamro.nl/ncol/test/orderstandard.asp`      |
| PSPID       | `TESTiDEALEASY`                                                     |

## WP-CLI

### Create test config

```bash
POST_ID=`wp post create --post_type=pronamic_gateway --post_title='ABN AMRO - iDEAL Easy - Test' --post_status=publish --porcelain`
wp post meta update $POST_ID '_pronamic_gateway_id' 'abnamro-ideal-easy'
wp post meta update $POST_ID '_pronamic_gateway_mode' 'test'
wp post meta update $POST_ID '_pronamic_gateway_ogone_psp_id' 'TESTiDEALEASY'
```

## Production Environment

**Payment Server URL:** https://internetkassa.abnamro.nl/ncol/prod/orderstandard.asp  

## Test Environment

**Payment Server URL:** https://internetkassa.abnamro.nl/ncol/test/orderstandard.asp  
