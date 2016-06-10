class Rover:
	def __init__ (self, x, y, f="N"):
		if f in ("N", "S", "W", "E"):
			self.__x = x
			self.__y = y
			self.__f = f
		else:
			print("Nao e possivel posionar o hover")


	def movimentar(self, movimentos):
		frase = 0
		while frase<len(movimentos):
				if(movimentos[frase]=='L'):
					self.esquerda()
				if(movimentos[frase]=='R'):
					self.direita()
				if(movimentos[frase]=='M'):
					self.mover()
				frase=frase+1

	def esquerda(self):
		if(self.__f=='N'):
			self.__f='W'
			return 0
		if(self.__f=='S'):
			self.__f='E'
			return 0
		if(self.__f=='E'):
			self.__f='N'
			return 0
		if(self.__f=='W'):
			self.__f='S'
			return 0


	def direita(self):
		if(self.__f=='N'):
			self.__f='E'
			return 0
		if(self.__f=='S'):
			self.__f='W'
			return 0
		if(self.__f=='E'):
			self.__f='S'
			return 0
		if(self.__f=='W'):
			self.__f='N'
			return 0

	def mover(self):
		if(self.__f=='N'):
			self.__y=self.__y+1
			return 0
		if(self.__f=='S'):
			self.__y=self.__y-1
			return 0
		if(self.__f=='E'):
			self.__x=self.__x+1
			return 0
		if(self.__f=='W'):
			self.__x=self.__x-1
			return 0

	def imprimir(self):
		print self.__x, self.__y, self.__f
roverm=Rover(5,5)
roverm=Rover(1,2,"N")
roverm.movimentar('LMLMLMLMM')
roverm.imprimir()
roverm=Rover(3,3,"E")
roverm.movimentar('MMRMMRMRRM')
roverm.imprimir()
