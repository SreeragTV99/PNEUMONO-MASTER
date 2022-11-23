import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import cv2
import os

NUM_EPOCHS = 500

STEPS_PER_EPOCH_TRAINING = 20
STEPS_PER_EPOCH_VALIDATION = 20

BATCH_SIZE_TRAINING = 15
BATCH_SIZE_VALIDATION = 2

BATCH_SIZE_TESTING = 1

import keras
from keras.layers import Conv2D, MaxPooling2D, Flatten, Dense, Dropout
from keras.models import Sequential
from keras import optimizers
from keras import regularizers
from keras.layers.normalization import BatchNormalization
 
from keras.applications.vgg16 import preprocess_input
from keras.preprocessing.image import ImageDataGenerator

data_generator = ImageDataGenerator(preprocessing_function=preprocess_input)

train_generator = data_generator.flow_from_directory(
        'dataset/train',
        target_size=(200,150),
        batch_size=BATCH_SIZE_TRAINING,
        class_mode='categorical')

validation_generator = data_generator.flow_from_directory(
        'dataset/test',
        target_size=(200,150),
        batch_size=BATCH_SIZE_VALIDATION,
        class_mode='categorical') 


