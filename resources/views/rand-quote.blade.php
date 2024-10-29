<!DOCTYPE html>
<html>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <p>
            <strong>{{ $quote->text }}</strong>
            – {{ $quote->author->name ?? 'Unknown Author' }}
        </p>

    </div>
</body>
</html>
