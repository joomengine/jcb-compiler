```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ServiceProvider (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Generator**

```uml
@startuml
class ServiceProvider << (F,LightGreen) >> #RoyalBlue {
  # string $version
  # array $registerlines
  # array $getfunctions
  + getCode() : ?string
  + setVersion(string $version) : void
  + setRegisterLine(string $className, string $functionName, ...) : void
  + setGetFunction(string $className, string $functionName, ...) : void
  # getAlias(string $className, string $alias) : string
  # getShare(string $functionName, string $alias) : string
  # getDependencies(string $className, ?array $dependencies = null) : string
}

note right of ServiceProvider::getCode
  Get the generated class code

  since: 3.2.0
  return: ?string
end note

note right of ServiceProvider::setVersion
  Set the class since version

  since: 3.2.0
  return: void
end note

note right of ServiceProvider::setRegisterLine
  Set the class alias and share code for the service provider register.

  since: 3.2.0
  return: void
  
  arguments:
    string $className
    string $functionName
    string $alias
end note

note right of ServiceProvider::setGetFunction
  Set the class get function for the service provider.

  since: 3.2.0
  return: void
  
  arguments:
    string $className
    string $functionName
    string $description
    ?array $dependencies = null
end note

note right of ServiceProvider::getAlias
  Generates the class alias for the service provider.

  since: 3.2.0
  return: string
end note

note right of ServiceProvider::getShare
  Generates the class share for the service provider.

  since: 3.2.0
  return: string
end note

note right of ServiceProvider::getDependencies
  Generates the class dependencies.

  since: 3.2.0
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---369ae3f5_90db_43b9_aba9_ce5c83311c4e---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

