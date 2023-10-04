```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Database (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Service**
```uml
@startuml
class Database  #Gold {
  + register(Container $container) : void
  + getModelLoad(Container $container) : ModelLoad
  + getModelUpsert(Container $container) : ModelUpsert
  + getLoadDatabase(Container $container) : LoadDatabase
  + getInsertDatabase(Container $container) : InsertDatabase
  + getUpdateDatabase(Container $container) : UpdateDatabase
}

note right of Database::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Database::getModelLoad
  Get the Power Model Load

  since: 3.2.0
  return: ModelLoad
end note

note right of Database::getModelUpsert
  Get the Power Model Update or Insert

  since: 3.2.0
  return: ModelUpsert
end note

note right of Database::getLoadDatabase
  Get the Load Database

  since: 3.2.0
  return: LoadDatabase
end note

note right of Database::getInsertDatabase
  Get the Insert Database

  since: 3.2.0
  return: InsertDatabase
end note

note right of Database::getUpdateDatabase
  Get the Update Database

  since: 3.2.0
  return: UpdateDatabase
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

