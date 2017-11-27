from cms.models import CMSPlugin
from django.db import models
from django.utils.translation import ugettext_lazy as _

from planet.models import Product, ProductGroup


class ProductPluginModel(CMSPlugin):
    """Product Plugin Model."""
    product = models.ForeignKey(Product)
    description = models.TextField(verbose_name='description')
    name = models.CharField(verbose_name=_('name'), max_length=50)

    def __str__(self):
        return self.name


class ProductGroupPluginModel(CMSPlugin):
    """Product Group Plugin Model."""
    product_group = models.ForeignKey(ProductGroup)
    name = models.CharField(verbose_name=_('name'), max_length=50)
    description = models.TextField(verbose_name='description')

    def __str__(self):
        return self.name
