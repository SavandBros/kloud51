from cms.models import CMSPlugin
from django.db import models
from django.utils.translation import ugettext_lazy as _
from djangocms_text_ckeditor.fields import HTMLField
from filer.fields.image import FilerImageField


class Cover(CMSPlugin):
    """Text Model."""
    title = models.CharField(verbose_name=_('title'), max_length=250, blank=True, null=True)
    sub_title = models.CharField(verbose_name=_('sub title'), max_length=500, blank=True, null=True)
    image = FilerImageField(verbose_name=_('image'), blank=True, null=True)
    detail = HTMLField(verbose_name=_('detail'), blank=True, null=True)

    def __str__(self):
        return self.title
