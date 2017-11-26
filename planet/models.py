from currencies import Currency
from django.db import models
from django.utils.translation import ugettext_lazy as _

from planet import conf


class MoneyCurrency(models.Model):
    """Money Currency."""
    currency = models.CharField(
        verbose_name=_("currency"),
        max_length=113,
        null=True,
        blank=True,
        choices=((k, k) for k in Currency.get_currency_formats())
    )

    def get_currency_parser(self):
        """Return Money Currency parser."""
        return Currency(self.currency)

    class Meta:
        verbose_name = _('Money Currency')
        verbose_name_plural = _('Money Currencies')


class Price(models.Model):
    """Price model."""
    PRICING_TYPE_CHOICES = (
        (conf.PricingType.HOURLY, _('Hourly')),
        (conf.PricingType.MONTHLY, _('Monthly')),
        (conf.PricingType.QUARTERLY, _('Quarterly')),
        (conf.PricingType.SEMI_ANNUALLY, _('Semi-Annually')),
        (conf.PricingType.ANNUALLY, _('Annually')),
        (conf.PricingType.BIENNIALLY, _('Biennially')),
        (conf.PricingType.TRIENNIALLY, _('Triennially')),
    )
    currency = models.ManyToManyField(MoneyCurrency)
    pricing_type = models.IntegerField(
        verbose_name=_('pricing type'),
        choices=PRICING_TYPE_CHOICES,
    )
    price = models.DecimalField(
        verbose_name=_('price'),
        decimal_places=3,
        max_digits=10,
    )

    class Meta:
        verbose_name = _('Price')
        verbose_name_plural = _('Prices')


class ProductGroup(models.Model):
    """Product Group model."""
    name = models.CharField(verbose_name=_('name'), max_length=50)
    slug = models.SlugField(verbose_name=_('slug'), unique=True)
    description = models.TextField(verbose_name='description')

    class Meta:
        verbose_name = _('Product Group')
        verbose_name_plural = _('Product Groups')

    def __str__(self):
        return self.name


class Product(models.Model):
    """Product model."""
    name = models.CharField(verbose_name=_('name'), max_length=50)
    slug = models.SlugField(verbose_name=_('slug'), unique=True)
    description = models.TextField(verbose_name='description')
    featured = models.BooleanField(verbose_name=_('featured'))
    in_stock = models.BooleanField(verbose_name=_('in stock'), default=True)
    group = models.ForeignKey(ProductGroup)
    price = models.ManyToManyField(Price)

    class Meta:
        verbose_name = _('Product')
        verbose_name_plural = _('Products')

    def __str__(self):
        return self.name

