from cms.models import CMSPlugin
from django.db import models
from django.utils.translation import ugettext_lazy as _
from djangocms_text_ckeditor.fields import HTMLField

from planet.models import Product, ProductGroup


class ProductGroupPluginModel(CMSPlugin):
    """Product Group Plugin Model."""
    product_group = models.ForeignKey(ProductGroup)

    def __str__(self):
        return self.product_group.name
