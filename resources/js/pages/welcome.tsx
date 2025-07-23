import { type SharedData } from '@/types';
import { Head, Link, usePage } from '@inertiajs/react';
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Badge } from "@/components/ui/badge";
import { Separator } from "@/components/ui/separator";
import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/components/ui/tabs";
import {
  Building2,
  Phone,
  Mail,
  MapPin,
  Clock,
  Search,
  Briefcase,
  GraduationCap,
  TrendingUp,
  Filter,
  Download,
  UserPlus,
  Building,
} from "lucide-react";

export default function Welcome() {
  const { auth } = usePage<SharedData>().props;
  
  return (
    <>
      <Head title="Portal de Empregos - Assaí">
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
      </Head>
      <div className="min-h-screen bg-gray-50">
      {/* Header */}
      <header className="bg-blue-900 text-white">
        <div className="container mx-auto px-4 py-4">
          <div className="flex items-center justify-between">
            <div className="flex items-center gap-4">
              <Building2 className="h-10 w-10" />
              <div>
                <h1 className="text-xl font-bold">Prefeitura Municipal de Assaí</h1>
                <p className="text-blue-200 text-sm">Portal de Empregos e Oportunidades</p>
              </div>
            </div>
            <div className="hidden md:flex items-center gap-6">
              <div className="flex items-center gap-2 text-sm">
                <Clock className="h-4 w-4" />
                <span>Seg-Sex: 8h às 17h</span>
              </div>
              <div className="flex items-center gap-2 text-sm">
                <Phone className="h-4 w-4" />
                <span>(43) 3262-1122</span>
              </div>
            </div>
          </div>
        </div>
      </header>

      {/* Navigation */}
      <nav className="bg-blue-800 text-white">
        <div className="container mx-auto px-4">
          <div className="flex items-center justify-between">
            <div className="flex">
              <a href="#" className="px-4 py-3 hover:bg-blue-700 transition-colors border-b-2 border-blue-600">
                Vagas
              </a>
              <a href="#" className="px-4 py-3 hover:bg-blue-700 transition-colors">
                Cadastrar Currículo
              </a>
              <a href="#" className="px-4 py-3 hover:bg-blue-700 transition-colors">
                Empresas
              </a>
              <a href="#" className="px-4 py-3 hover:bg-blue-700 transition-colors">
                Capacitação
              </a>
              <a href="#" className="px-4 py-3 hover:bg-blue-700 transition-colors">
                Relatórios
              </a>
            </div>
            <div className="flex items-center gap-2">
              <Input placeholder="Buscar vagas..." className="w-48 h-8 text-black" />
              <Button size="sm" variant="secondary">
                <Search className="h-4 w-4" />
              </Button>
            </div>
          </div>
        </div>
      </nav>

      {/* Main Content */}
      <main className="container mx-auto px-4 py-8">
        {/* Hero Section */}
        <section className="mb-8">
          <div className="bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-lg p-8">
            <div className="grid md:grid-cols-2 gap-8 items-center">
              <div>
                <h2 className="text-3xl font-bold mb-4">Portal de Empregos de Assaí</h2>
                <p className="text-blue-100 text-lg mb-6">
                  Conectando talentos locais com oportunidades de trabalho na nossa cidade
                </p>
                <div className="flex flex-wrap gap-4">
                  <Button className="bg-white text-blue-900 hover:bg-gray-100">
                    <UserPlus className="h-4 w-4 mr-2" />
                    Cadastrar Currículo
                  </Button>
                  <Button
                    variant="outline"
                    className="border-white text-white hover:bg-white hover:text-blue-900 bg-transparent"
                  >
                    <Briefcase className="h-4 w-4 mr-2" />
                    Ver Vagas
                  </Button>
                </div>
              </div>
              <div className="grid grid-cols-2 gap-4 text-center">
                <div className="bg-blue-800 rounded-lg p-4">
                  <div className="text-2xl font-bold">127</div>
                  <div className="text-blue-200 text-sm">Vagas Ativas</div>
                </div>
                <div className="bg-blue-800 rounded-lg p-4">
                  <div className="text-2xl font-bold">2.341</div>
                  <div className="text-blue-200 text-sm">Currículos</div>
                </div>
                <div className="bg-blue-800 rounded-lg p-4">
                  <div className="text-2xl font-bold">89</div>
                  <div className="text-blue-200 text-sm">Empresas</div>
                </div>
                <div className="bg-blue-800 rounded-lg p-4">
                  <div className="text-2xl font-bold">456</div>
                  <div className="text-blue-200 text-sm">Contratações</div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* Quick Actions */}
        <section className="mb-8">
          <div className="grid md:grid-cols-4 gap-4">
            <Card className="hover:shadow-md transition-shadow cursor-pointer">
              <CardContent className="p-4 text-center">
                <Briefcase className="h-8 w-8 text-blue-900 mx-auto mb-2" />
                <h3 className="font-semibold mb-1">Buscar Vagas</h3>
                <p className="text-gray-600 text-sm">Encontre oportunidades na sua área</p>
              </CardContent>
            </Card>

            <Card className="hover:shadow-md transition-shadow cursor-pointer">
              <CardContent className="p-4 text-center">
                <UserPlus className="h-8 w-8 text-blue-900 mx-auto mb-2" />
                <h3 className="font-semibold mb-1">Cadastrar CV</h3>
                <p className="text-gray-600 text-sm">Registre seu currículo no sistema</p>
              </CardContent>
            </Card>

            <Card className="hover:shadow-md transition-shadow cursor-pointer">
              <CardContent className="p-4 text-center">
                <GraduationCap className="h-8 w-8 text-blue-900 mx-auto mb-2" />
                <h3 className="font-semibold mb-1">Cursos</h3>
                <p className="text-gray-600 text-sm">Capacitação profissional gratuita</p>
              </CardContent>
            </Card>

            <Card className="hover:shadow-md transition-shadow cursor-pointer">
              <CardContent className="p-4 text-center">
                <Building className="h-8 w-8 text-blue-900 mx-auto mb-2" />
                <h3 className="font-semibold mb-1">Para Empresas</h3>
                <p className="text-gray-600 text-sm">Publique vagas e encontre talentos</p>
              </CardContent>
            </Card>
          </div>
        </section>

        {/* Main Content Tabs */}
        <section className="mb-8">
          <Tabs defaultValue="vagas" className="w-full">
            <TabsList className="grid w-full grid-cols-4">
              <TabsTrigger value="vagas">Vagas em Destaque</TabsTrigger>
              <TabsTrigger value="empresas">Empresas Parceiras</TabsTrigger>
              <TabsTrigger value="cursos">Cursos Disponíveis</TabsTrigger>
              <TabsTrigger value="noticias">Notícias</TabsTrigger>
            </TabsList>

            <TabsContent value="vagas" className="mt-6">
              <div className="flex justify-between items-center mb-4">
                <h3 className="text-xl font-bold">Vagas em Destaque</h3>
                <div className="flex gap-2">
                  <Button variant="outline" size="sm">
                    <Filter className="h-4 w-4 mr-2" />
                    Filtrar
                  </Button>
                  <Button variant="outline" size="sm">
                    <Download className="h-4 w-4 mr-2" />
                    Exportar
                  </Button>
                </div>
              </div>

              <div className="grid gap-4">
                <Card>
                  <CardContent className="p-6">
                    <div className="flex justify-between items-start mb-4">
                      <div>
                        <h4 className="text-lg font-semibold text-blue-900">Assistente Administrativo</h4>
                        <p className="text-gray-600">Empresa ABC Ltda.</p>
                      </div>
                      <div className="text-right">
                        <Badge variant="secondary">CLT</Badge>
                        <p className="text-sm text-gray-500 mt-1">Publicado há 2 dias</p>
                      </div>
                    </div>
                    <div className="flex flex-wrap gap-2 mb-4">
                      <Badge variant="outline">Ensino Médio</Badge>
                      <Badge variant="outline">Experiência: 1 ano</Badge>
                      <Badge variant="outline">Presencial</Badge>
                    </div>
                    <p className="text-gray-700 mb-4">
                      Responsável por atividades administrativas gerais, atendimento ao cliente e organização de
                      documentos.
                    </p>
                    <div className="flex justify-between items-center">
                      <div className="flex items-center gap-4 text-sm text-gray-600">
                        <span className="flex items-center gap-1">
                          <MapPin className="h-4 w-4" />
                          Centro, Assaí
                        </span>
                        <span className="flex items-center gap-1">
                          <Clock className="h-4 w-4" />
                          40h/semana
                        </span>
                      </div>
                      <Button>Ver Detalhes</Button>
                    </div>
                  </CardContent>
                </Card>

                <Card>
                  <CardContent className="p-6">
                    <div className="flex justify-between items-start mb-4">
                      <div>
                        <h4 className="text-lg font-semibold text-blue-900">Vendedor(a)</h4>
                        <p className="text-gray-600">Loja XYZ</p>
                      </div>
                      <div className="text-right">
                        <Badge variant="secondary">CLT</Badge>
                        <p className="text-sm text-gray-500 mt-1">Publicado há 1 dia</p>
                      </div>
                    </div>
                    <div className="flex flex-wrap gap-2 mb-4">
                      <Badge variant="outline">Ensino Médio</Badge>
                      <Badge variant="outline">Sem experiência</Badge>
                      <Badge variant="outline">Presencial</Badge>
                    </div>
                    <p className="text-gray-700 mb-4">
                      Atendimento ao cliente, organização de produtos e auxílio nas vendas. Vaga para iniciantes.
                    </p>
                    <div className="flex justify-between items-center">
                      <div className="flex items-center gap-4 text-sm text-gray-600">
                        <span className="flex items-center gap-1">
                          <MapPin className="h-4 w-4" />
                          Av. Principal, Assaí
                        </span>
                        <span className="flex items-center gap-1">
                          <Clock className="h-4 w-4" />
                          44h/semana
                        </span>
                      </div>
                      <Button>Ver Detalhes</Button>
                    </div>
                  </CardContent>
                </Card>

                <Card>
                  <CardContent className="p-6">
                    <div className="flex justify-between items-start mb-4">
                      <div>
                        <h4 className="text-lg font-semibold text-blue-900">Operador de Máquinas</h4>
                        <p className="text-gray-600">Indústria DEF S.A.</p>
                      </div>
                      <div className="text-right">
                        <Badge variant="secondary">CLT</Badge>
                        <p className="text-sm text-gray-500 mt-1">Publicado há 3 dias</p>
                      </div>
                    </div>
                    <div className="flex flex-wrap gap-2 mb-4">
                      <Badge variant="outline">Técnico</Badge>
                      <Badge variant="outline">Experiência: 2 anos</Badge>
                      <Badge variant="outline">Presencial</Badge>
                    </div>
                    <p className="text-gray-700 mb-4">
                      Operação de equipamentos industriais, manutenção preventiva e controle de qualidade.
                    </p>
                    <div className="flex justify-between items-center">
                      <div className="flex items-center gap-4 text-sm text-gray-600">
                        <span className="flex items-center gap-1">
                          <MapPin className="h-4 w-4" />
                          Distrito Industrial, Assaí
                        </span>
                        <span className="flex items-center gap-1">
                          <Clock className="h-4 w-4" />
                          40h/semana
                        </span>
                      </div>
                      <Button>Ver Detalhes</Button>
                    </div>
                  </CardContent>
                </Card>
              </div>

              <div className="text-center mt-6">
                <Button variant="outline">Ver Todas as Vagas (127)</Button>
              </div>
            </TabsContent>

            <TabsContent value="empresas" className="mt-6">
              <h3 className="text-xl font-bold mb-4">Empresas Parceiras</h3>
              <div className="grid md:grid-cols-3 gap-4">
                <Card>
                  <CardContent className="p-4 text-center">
                    <Building className="h-12 w-12 text-blue-900 mx-auto mb-3" />
                    <h4 className="font-semibold mb-2">Comércio Local</h4>
                    <p className="text-gray-600 text-sm mb-3">45 empresas cadastradas</p>
                    <Button variant="outline" size="sm">
                      Ver Empresas
                    </Button>
                  </CardContent>
                </Card>

                <Card>
                  <CardContent className="p-4 text-center">
                    <Building className="h-12 w-12 text-blue-900 mx-auto mb-3" />
                    <h4 className="font-semibold mb-2">Indústria</h4>
                    <p className="text-gray-600 text-sm mb-3">23 empresas cadastradas</p>
                    <Button variant="outline" size="sm">
                      Ver Empresas
                    </Button>
                  </CardContent>
                </Card>

                <Card>
                  <CardContent className="p-4 text-center">
                    <Building className="h-12 w-12 text-blue-900 mx-auto mb-3" />
                    <h4 className="font-semibold mb-2">Serviços</h4>
                    <p className="text-gray-600 text-sm mb-3">21 empresas cadastradas</p>
                    <Button variant="outline" size="sm">
                      Ver Empresas
                    </Button>
                  </CardContent>
                </Card>
              </div>
            </TabsContent>

            <TabsContent value="cursos" className="mt-6">
              <h3 className="text-xl font-bold mb-4">Cursos de Capacitação</h3>
              <div className="grid md:grid-cols-2 gap-4">
                <Card>
                  <CardContent className="p-6">
                    <div className="flex items-start gap-4">
                      <GraduationCap className="h-8 w-8 text-blue-900 mt-1" />
                      <div className="flex-1">
                        <h4 className="font-semibold mb-2">Informática Básica</h4>
                        <p className="text-gray-600 text-sm mb-3">
                          Curso básico de informática com Word, Excel e Internet
                        </p>
                        <div className="flex items-center gap-4 text-sm text-gray-600 mb-3">
                          <span>40 horas</span>
                          <span>•</span>
                          <span>Gratuito</span>
                          <span>•</span>
                          <span>Presencial</span>
                        </div>
                        <Button size="sm">Inscrever-se</Button>
                      </div>
                    </div>
                  </CardContent>
                </Card>

                <Card>
                  <CardContent className="p-6">
                    <div className="flex items-start gap-4">
                      <GraduationCap className="h-8 w-8 text-blue-900 mt-1" />
                      <div className="flex-1">
                        <h4 className="font-semibold mb-2">Atendimento ao Cliente</h4>
                        <p className="text-gray-600 text-sm mb-3">
                          Técnicas de atendimento e relacionamento com clientes
                        </p>
                        <div className="flex items-center gap-4 text-sm text-gray-600 mb-3">
                          <span>20 horas</span>
                          <span>•</span>
                          <span>Gratuito</span>
                          <span>•</span>
                          <span>Online</span>
                        </div>
                        <Button size="sm">Inscrever-se</Button>
                      </div>
                    </div>
                  </CardContent>
                </Card>
              </div>
            </TabsContent>

            <TabsContent value="noticias" className="mt-6">
              <h3 className="text-xl font-bold mb-4">Notícias do Portal</h3>
              <div className="space-y-4">
                <Card>
                  <CardContent className="p-4">
                    <h4 className="font-semibold mb-2">Nova parceria com empresas locais</h4>
                    <p className="text-gray-600 text-sm mb-2">
                      O Portal de Empregos de Assaí firmou parceria com 15 novas empresas da região, aumentando as
                      oportunidades de trabalho para os cidadãos.
                    </p>
                    <p className="text-gray-500 text-xs">17 de Janeiro, 2024</p>
                  </CardContent>
                </Card>

                <Card>
                  <CardContent className="p-4">
                    <h4 className="font-semibold mb-2">Feira de Empregos será realizada em fevereiro</h4>
                    <p className="text-gray-600 text-sm mb-2">
                      Evento reunirá empresas e candidatos no Centro de Convenções de Assaí. Inscrições abertas para
                      empresas e participantes.
                    </p>
                    <p className="text-gray-500 text-xs">15 de Janeiro, 2024</p>
                  </CardContent>
                </Card>
              </div>
            </TabsContent>
          </Tabs>
        </section>

        {/* Statistics */}
        <section className="mb-8">
          <Card>
            <CardHeader>
              <CardTitle className="flex items-center gap-2">
                <TrendingUp className="h-5 w-5" />
                Estatísticas do Portal
              </CardTitle>
            </CardHeader>
            <CardContent>
              <div className="grid md:grid-cols-4 gap-6 text-center">
                <div>
                  <div className="text-3xl font-bold text-blue-900 mb-1">127</div>
                  <div className="text-gray-600 text-sm">Vagas Ativas</div>
                </div>
                <div>
                  <div className="text-3xl font-bold text-blue-900 mb-1">2.341</div>
                  <div className="text-gray-600 text-sm">Currículos Cadastrados</div>
                </div>
                <div>
                  <div className="text-3xl font-bold text-blue-900 mb-1">456</div>
                  <div className="text-gray-600 text-sm">Contratações Realizadas</div>
                </div>
                <div>
                  <div className="text-3xl font-bold text-blue-900 mb-1">89</div>
                  <div className="text-gray-600 text-sm">Empresas Parceiras</div>
                </div>
              </div>
            </CardContent>
          </Card>
        </section>

        {/* Contact Information */}
        <section>
          <h3 className="text-2xl font-bold text-gray-900 mb-6">Informações de Contato</h3>
          <Card>
            <CardContent className="p-6">
              <div className="grid md:grid-cols-3 gap-6">
                <div className="flex items-start gap-3">
                  <MapPin className="h-5 w-5 text-blue-900 mt-1" />
                  <div>
                    <h4 className="font-semibold mb-1">Endereço</h4>
                    <p className="text-gray-600 text-sm">
                      Rua Prefeito João Silva, 456
                      <br />
                      Centro - Assaí/PR
                      <br />
                      CEP: 86220-000
                    </p>
                  </div>
                </div>

                <div className="flex items-start gap-3">
                  <Phone className="h-5 w-5 text-blue-900 mt-1" />
                  <div>
                    <h4 className="font-semibold mb-1">Telefones</h4>
                    <p className="text-gray-600 text-sm">
                      Portal de Empregos: (43) 3262-1122
                      <br />
                      Secretaria do Trabalho: (43) 3262-1123
                      <br />
                      WhatsApp: (43) 99999-0000
                    </p>
                  </div>
                </div>

                <div className="flex items-start gap-3">
                  <Mail className="h-5 w-5 text-blue-900 mt-1" />
                  <div>
                    <h4 className="font-semibold mb-1">E-mail</h4>
                    <p className="text-gray-600 text-sm">
                      empregos@assai.pr.gov.br
                      <br />
                      trabalho@assai.pr.gov.br
                    </p>
                  </div>
                </div>
              </div>
            </CardContent>
          </Card>
        </section>
      </main>

      {/* Footer */}
      <footer className="bg-gray-800 text-white mt-16">
        <div className="container mx-auto px-4 py-8">
          <div className="grid md:grid-cols-4 gap-6">
            <div>
              <h4 className="font-semibold mb-3">Portal de Empregos</h4>
              <p className="text-gray-300 text-sm">Conectando talentos com oportunidades na cidade de Assaí.</p>
            </div>

            <div>
              <h4 className="font-semibold mb-3">Para Candidatos</h4>
              <ul className="space-y-2 text-sm">
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Cadastrar Currículo
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Buscar Vagas
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Cursos Gratuitos
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Orientação Profissional
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h4 className="font-semibold mb-3">Para Empresas</h4>
              <ul className="space-y-2 text-sm">
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Publicar Vagas
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Buscar Candidatos
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Cadastro de Empresa
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Relatórios
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h4 className="font-semibold mb-3">Atendimento</h4>
              <p className="text-gray-300 text-sm">
                Segunda a Sexta-feira
                <br />
                8:00 às 17:00
                <br />
                <br />
                (43) 3262-1122
              </p>
            </div>
          </div>

          <Separator className="my-6 bg-gray-700" />

          <div className="text-center text-gray-400 text-sm">
            <p>&copy; 2024 Prefeitura Municipal de Assaí - Portal de Empregos. Todos os direitos reservados.</p>
          </div>
        </div>
      </footer>
      </div>
    </>
  );
}
