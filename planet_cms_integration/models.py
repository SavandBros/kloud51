from cms.models import CMSPlugin
from django.db import models
from django.utils.translation import ugettext_lazy as _
from djangocms_text_ckeditor.fields import HTMLField

from planet.models import Product, ProductGroup


class ProductGroupPluginModel(CMSPlugin):
    """Product Group Plugin Model."""
    product_group = models.ForeignKey(ProductGroup)
    name = models.CharField(verbose_name=_('name'), max_length=50)
    description = models.TextField(verbose_name='description')

    def __str__(self):
        return self.name


class ProductPluginModel(CMSPlugin):
    """Product Plugin Model."""
    product = models.ForeignKey(Product)
    group = models.ForeignKey(ProductGroupPluginModel)
    description = HTMLField(verbose_name='description')
    name = models.CharField(verbose_name=_('name'), max_length=50)
    info = models.CharField(verbose_name=_('info'), blank=True, null=True)
    label = models.CharField(verbose_name=_('label'), blank=True, null=True)
    order_link = models.URLField()

    def __str__(self):
        return self.name
