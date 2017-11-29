# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import migrations, models
import djangocms_text_ckeditor.fields


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='MoneyCurrency',
            fields=[
                ('id', models.AutoField(verbose_name='ID', primary_key=True, serialize=False, auto_created=True)),
                ('code', models.CharField(verbose_name='code', max_length=3, unique=True, choices=[('AED', 'AED'), ('ALL', 'ALL'), ('AMD', 'AMD'), ('ANG', 'ANG'), ('AOA', 'AOA'), ('ARS', 'ARS'), ('AUD', 'AUD'), ('AWG', 'AWG'), ('AZN', 'AZN'), ('BAM', 'BAM'), ('BBD', 'BBD'), ('BDT', 'BDT'), ('BGN', 'BGN'), ('BHD', 'BHD'), ('BND', 'BND'), ('BOB', 'BOB'), ('BRL', 'BRL'), ('BSD', 'BSD'), ('BTN', 'BTN'), ('BWP', 'BWP'), ('BYR', 'BYR'), ('BZD', 'BZD'), ('CAD', 'CAD'), ('CHF', 'CHF'), ('CLP', 'CLP'), ('CNY', 'CNY'), ('COP', 'COP'), ('CRC', 'CRC'), ('CZK', 'CZK'), ('DKK', 'DKK'), ('DOP', 'DOP'), ('DZD', 'DZD'), ('EGP', 'EGP'), ('ETB', 'ETB'), ('EUR', 'EUR'), ('FJD', 'FJD'), ('GBP', 'GBP'), ('GEL', 'GEL'), ('GHS', 'GHS'), ('GMD', 'GMD'), ('GTQ', 'GTQ'), ('GYD', 'GYD'), ('HKD', 'HKD'), ('HNL', 'HNL'), ('HRK', 'HRK'), ('HUF', 'HUF'), ('IDR', 'IDR'), ('ILS', 'ILS'), ('INR', 'INR'), ('ISK', 'ISK'), ('JEP', 'JEP'), ('JMD', 'JMD'), ('JOD', 'JOD'), ('JPY', 'JPY'), ('KES', 'KES'), ('KGS', 'KGS'), ('KHR', 'KHR'), ('KRW', 'KRW'), ('KWD', 'KWD'), ('KYD', 'KYD'), ('KZT', 'KZT'), ('LBP', 'LBP'), ('LKR', 'LKR'), ('LTL', 'LTL'), ('LVL', 'LVL'), ('MAD', 'MAD'), ('MDL', 'MDL'), ('MGA', 'MGA'), ('MKD', 'MKD'), ('MMK', 'MMK'), ('MNT', 'MNT'), ('MOP', 'MOP'), ('MUR', 'MUR'), ('MVR', 'MVR'), ('MXN', 'MXN'), ('MYR', 'MYR'), ('MZN', 'MZN'), ('NAD', 'NAD'), ('NGN', 'NGN'), ('NIO', 'NIO'), ('NOK', 'NOK'), ('NPR', 'NPR'), ('NZD', 'NZD'), ('OMR', 'OMR'), ('PEN', 'PEN'), ('PGK', 'PGK'), ('PHP', 'PHP'), ('PKR', 'PKR'), ('PLN', 'PLN'), ('PYG', 'PYG'), ('QAR', 'QAR'), ('RON', 'RON'), ('RSD', 'RSD'), ('RUB', 'RUB'), ('RWF', 'RWF'), ('SAR', 'SAR'), ('SCR', 'SCR'), ('SEK', 'SEK'), ('SGD', 'SGD'), ('STD', 'STD'), ('SYP', 'SYP'), ('THB', 'THB'), ('TND', 'TND'), ('TRY', 'TRY'), ('TTD', 'TTD'), ('TWD', 'TWD'), ('TZS', 'TZS'), ('UAH', 'UAH'), ('UGX', 'UGX'), ('USD', 'USD'), ('UYU', 'UYU'), ('VEF', 'VEF'), ('VND', 'VND'), ('VUV', 'VUV'), ('WST', 'WST'), ('XAF', 'XAF'), ('XBT', 'XBT'), ('XCD', 'XCD'), ('XOF', 'XOF'), ('XPF', 'XPF'), ('ZAR', 'ZAR'), ('ZMW', 'ZMW')])),
                ('rate', models.DecimalField(verbose_name='rate', max_digits=25, decimal_places=6)),
            ],
            options={
                'verbose_name': 'Money Currency',
                'verbose_name_plural': 'Money Currencies',
            },
        ),
        migrations.CreateModel(
            name='Price',
            fields=[
                ('id', models.AutoField(verbose_name='ID', primary_key=True, serialize=False, auto_created=True)),
                ('pricing_type', models.IntegerField(verbose_name='pricing type', choices=[(0, 'Hourly'), (2, 'Monthly'), (4, 'Quarterly'), (5, 'Semi-Annually'), (6, 'Annually'), (7, 'Biennially'), (8, 'Triennially')])),
                ('price', models.DecimalField(verbose_name='price', max_digits=10, decimal_places=6)),
                ('currencies', models.ManyToManyField(to='planet.MoneyCurrency')),
            ],
            options={
                'verbose_name': 'Price',
                'verbose_name_plural': 'Prices',
                'ordering': ('pricing_type',),
            },
        ),
        migrations.CreateModel(
            name='Product',
            fields=[
                ('id', models.AutoField(verbose_name='ID', primary_key=True, serialize=False, auto_created=True)),
                ('slug', models.SlugField(verbose_name='slug', unique=True)),
                ('slug_en', models.SlugField(verbose_name='slug', unique=True, null=True)),
                ('slug_hi', models.SlugField(verbose_name='slug', unique=True, null=True)),
                ('slug_fa', models.SlugField(verbose_name='slug', unique=True, null=True)),
                ('slug_ru', models.SlugField(verbose_name='slug', unique=True, null=True)),
                ('name', models.CharField(verbose_name='name', max_length=50)),
                ('name_en', models.CharField(verbose_name='name', max_length=50, null=True)),
                ('name_hi', models.CharField(verbose_name='name', max_length=50, null=True)),
                ('name_fa', models.CharField(verbose_name='name', max_length=50, null=True)),
                ('name_ru', models.CharField(verbose_name='name', max_length=50, null=True)),
                ('description', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description')),
                ('description_en', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', null=True)),
                ('description_hi', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', null=True)),
                ('description_fa', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', null=True)),
                ('description_ru', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', null=True)),
                ('featured', models.BooleanField(verbose_name='featured')),
                ('in_stock', models.BooleanField(verbose_name='in stock', default=True)),
                ('info', models.CharField(verbose_name='info', max_length=250, blank=True, null=True)),
                ('info_en', models.CharField(verbose_name='info', max_length=250, blank=True, null=True)),
                ('info_hi', models.CharField(verbose_name='info', max_length=250, blank=True, null=True)),
                ('info_fa', models.CharField(verbose_name='info', max_length=250, blank=True, null=True)),
                ('info_ru', models.CharField(verbose_name='info', max_length=250, blank=True, null=True)),
                ('label', models.CharField(verbose_name='label', max_length=100, blank=True, null=True)),
                ('label_en', models.CharField(verbose_name='label', max_length=100, blank=True, null=True)),
                ('label_hi', models.CharField(verbose_name='label', max_length=100, blank=True, null=True)),
                ('label_fa', models.CharField(verbose_name='label', max_length=100, blank=True, null=True)),
                ('label_ru', models.CharField(verbose_name='label', max_length=100, blank=True, null=True)),
                ('order_link', models.URLField()),
                ('order_link_en', models.URLField(null=True)),
                ('order_link_hi', models.URLField(null=True)),
                ('order_link_fa', models.URLField(null=True)),
                ('order_link_ru', models.URLField(null=True)),
            ],
            options={
                'verbose_name': 'Product',
                'verbose_name_plural': 'Products',
            },
        ),
        migrations.CreateModel(
            name='ProductGroup',
            fields=[
                ('id', models.AutoField(verbose_name='ID', primary_key=True, serialize=False, auto_created=True)),
                ('name', models.CharField(verbose_name='name', max_length=50)),
                ('name_en', models.CharField(verbose_name='name', max_length=50, null=True)),
                ('name_hi', models.CharField(verbose_name='name', max_length=50, null=True)),
                ('name_fa', models.CharField(verbose_name='name', max_length=50, null=True)),
                ('name_ru', models.CharField(verbose_name='name', max_length=50, null=True)),
                ('slug', models.SlugField(verbose_name='slug', unique=True)),
                ('slug_en', models.SlugField(verbose_name='slug', unique=True, null=True)),
                ('slug_hi', models.SlugField(verbose_name='slug', unique=True, null=True)),
                ('slug_fa', models.SlugField(verbose_name='slug', unique=True, null=True)),
                ('slug_ru', models.SlugField(verbose_name='slug', unique=True, null=True)),
                ('description', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description')),
                ('description_en', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', null=True)),
                ('description_hi', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', null=True)),
                ('description_fa', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', null=True)),
                ('description_ru', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', null=True)),
            ],
            options={
                'verbose_name': 'Product Group',
                'verbose_name_plural': 'Product Groups',
            },
        ),
        migrations.AddField(
            model_name='product',
            name='group',
            field=models.ForeignKey(to='planet.ProductGroup'),
        ),
        migrations.AddField(
            model_name='price',
            name='product',
            field=models.ForeignKey(to='planet.Product'),
        ),
    ]
