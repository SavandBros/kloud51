# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import migrations, models
import filer.fields.image
from django.conf import settings


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.FILER_IMAGE_MODEL),
        ('cms', '0016_auto_20160608_1535'),
        ('planet', '0001_initial'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='section',
            name='name_en',
        ),
        migrations.RemoveField(
            model_name='section',
            name='name_hi',
        ),
        migrations.RemoveField(
            model_name='section',
            name='name_ru',
        ),
        migrations.RemoveField(
            model_name='sectionitem',
            name='link',
        ),
        migrations.AddField(
            model_name='section',
            name='css_classes',
            field=models.CharField(verbose_name='css classes', max_length=25, blank=True, null=True),
        ),
        migrations.AddField(
            model_name='section',
            name='image',
            field=filer.fields.image.FilerImageField(verbose_name='image', blank=True, null=True, help_text='Can be used for background image or the whole section.', to=settings.FILER_IMAGE_MODEL),
        ),
        migrations.AddField(
            model_name='section',
            name='title',
            field=models.CharField(verbose_name='title', max_length=250, default='make', help_text='Public title of the section, visitors will be able to see it.'),
            preserve_default=False,
        ),
        migrations.AddField(
            model_name='section',
            name='title_en',
            field=models.CharField(verbose_name='title', max_length=250, null=True, help_text='Public title of the section, visitors will be able to see it.'),
        ),
        migrations.AddField(
            model_name='section',
            name='title_hi',
            field=models.CharField(verbose_name='title', max_length=250, null=True, help_text='Public title of the section, visitors will be able to see it.'),
        ),
        migrations.AddField(
            model_name='section',
            name='title_ru',
            field=models.CharField(verbose_name='title', max_length=250, null=True, help_text='Public title of the section, visitors will be able to see it.'),
        ),
        migrations.AddField(
            model_name='sectionitem',
            name='external_link',
            field=models.URLField(verbose_name='external link', blank=True, null=True),
        ),
        migrations.AddField(
            model_name='sectionitem',
            name='internal_link',
            field=models.ForeignKey(verbose_name='internal link', blank=True, null=True, to='cms.Page'),
        ),
        migrations.AlterField(
            model_name='section',
            name='name',
            field=models.CharField(verbose_name='name', max_length=250, help_text='Internal user only.'),
        ),
    ]
